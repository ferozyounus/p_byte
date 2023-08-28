<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Traits\SlugTrait;
use App\Traits\UploadTrait;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use SimpleXMLElement; 

class ProfileController extends Controller
{

    use SlugTrait;
    use UploadTrait;

    public function profile()
    {
        $data['page_title'] = "User Profile";
        return view('admin.profiles.profile', $data);
    }

    // public function index(){
    //     $data['page_title'] = "User Profile";
    //     $data['educationExperiences'] = EducationExperience::where('user_id', Auth::user()->id)->orderBy('id','desc')->get();
    //     $data['workexperiences'] = Workexperience::where('user_id', Auth::user()->id)->orderBy('id','desc')->get();
    //     return view('admin.profiles.listing',$data);
    // }

    public function index()
    {
        $data['page_title'] = "User Profile";
        // $data['educationExperiences'] = EducationExperience::where('user_id', Auth::user()->id)->orderBy('id','desc')->get();
        // $data['workexperiences'] = Workexperience::where('user_id', Auth::user()->id)->orderBy('id','desc')->get();
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://services.onetcenter.org/ws/mnm/interestprofiler/questions?start=1&end=60',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Basic bG92ZV9ldmVyeV9tb25kYXk6NDgzM3VpeA==',
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        $response = new SimpleXMLElement($response);
        $response = $response->question;
        return view('admin.profiles.listing', ['questions' => $response]);
    }

    public function answers(Request $req)
    {
        $answers = '';
        $i = 0;
        for ($response = 0; $response < 60; $response++) {
            $i++;
            if (!empty($_POST['strong' . $i])) {
                $answers .= $_POST['strong' . $i];
            }
        }
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://services.onetcenter.org/ws/mnm/interestprofiler/careers?answers=' . $answers . '',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Basic bG92ZV9ldmVyeV9tb25kYXk6NDgzM3VpeA==',
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);

        $xml = new SimpleXMLElement($response);
        $response = json_decode(json_encode((array) $xml), true);
    //    dd($response['career']);
      
        foreach($response['career'] as $key => $data){
            // dd($data);
            
            if($key == 0){
                $occupation = str_replace("&","",$data['title']);
            }else{
                $occupation .= ','.str_replace("&","",$data['title']);
            }
        }
        $user = Member::find(Auth::user()->id);
        $user->update(['occupation' => $occupation]);
        // dd($user);
        // die();
        $response = $response['career'];
        
        return view('admin.profiles.answers', ['answers' => $response]);

    }

    public function update_password(Request $request, Member $member)
    {

        $input = $request->all();
        unset($input['_token']);
        unset($input['confirm_password']);

        try {
            DB::beginTransaction();
            $input['password'] = Hash::make($input['password']);
            Member::where('id', Auth::user()->id)->update($input);
            $notification = array(
                'message' => 'Profile Password Updated!',
                'alert-type' => 'success',
            );
            DB::commit();

        } catch (\Throwable $th) {
            $notification = array(
                'message' => 'Error Occured!',
                'alert-type' => 'error',
            );
            DB::rollback();
        }
        return redirect()->route('user.profile')->with($notification);

    }

    public function update(Request $request)
    {

        $input = $request->all();
        unset($input['_token']);
        unset($input['formType']);
        unset($input['formType2']);

        if ($request->formType == "personalDetail") {
            $input['personal_detail_check'] = 1;
        }
        if ($request->formType2 == "biography") {
            $input['about_me_check'] = 1;
        }

        try {
            DB::beginTransaction();
            if ($request->formType || $request->formType2) {
                $input['image'] = isset($input['image']) ? $input['image'] : null;
                if ($input['image'] != null) {
                    $checkName = strtotime(date("Y-m-d h:i:sa"));
                    $input['image'] = $this->uploadImage($input['image'], $checkName, 'uploads/user/', 'public');
                } else {
                    $input['image'] = Auth::user()->image;
                }
                Member::where('id', Auth::user()->id)->update($input);
            }

            $notification = array(
                'message' => 'Member updated!',
                'alert-type' => 'success',
            );
            DB::commit();

            return response()->json(
                ['success' => 'Form is successfully submitted!']);

        } catch (\Throwable $th) {

            $notification = array(
                'message' => 'Error Occured!',
                'alert-type' => 'error',
            );
            DB::rollback();
            return response()->json(
                ['error' => $th]);
        }

    }

}
