<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Traits\SlugTrait;
use App\Traits\UploadTrait;
use App\Models\Occupation;
use SimpleXMLElement; 


class OccupationController extends Controller
{

    use SlugTrait;
    use UploadTrait;

    public function index(){
        $data['page_title'] = "Occupations List";
        $data['occupations'] = Occupation::orderByDesc('created_at')->get();
        // $curl = curl_init();

        // $curl = curl_init();

        // curl_setopt_array($curl, array(
        //   CURLOPT_URL => 'https://services.onetcenter.org/v1.9/ws/mnm/careers/13-2011.00/report',
        //   CURLOPT_RETURNTRANSFER => true,
        //   CURLOPT_ENCODING => '',
        //   CURLOPT_MAXREDIRS => 10,
        //   CURLOPT_TIMEOUT => 0,
        //   CURLOPT_FOLLOWLOCATION => true,
        //   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //   CURLOPT_CUSTOMREQUEST => 'GET',
        //   CURLOPT_HTTPHEADER => array(
        //     'Authorization: Basic bG92ZV9ldmVyeV9tb25kYXk6NDgzM3VpeA=='
        //   ),
        // ));
        
        // $response = curl_exec($curl);
        
        // curl_close($curl);
        // $response = new SimpleXMLElement($response);
        // dd($response);
        // foreach($response as $key => $data){
        //     dd($data);
        // }
        return view('admin.occupation.listing',$data);
    }
    
    public function create(){
        $data['page_title'] = "New Occupation";

        return view('admin.occupation.create',$data);
    }

    public function store(Request $request){
        try {
            $input = $request->all();
            DB::beginTransaction();
            $occupation = new Occupation();
            $occupation->onetsoc_code = rand(0000 , 9999);
            $occupation->title = $request->occupation_title;
            $occupation->description = $request->occupation_description;
            
            
            $occupation->save();
            // Log::info(DB::getQueryLog());
            $notification = array(
                'message' => 'Job created!',
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
        return redirect()->route('occupations.listing')->with($notification);
    }

    public function edit($id){
        
        $data['page_title'] = "Edit Occupation";
        $data['occupations'] = Occupation::where('onetsoc_code',$id)->first();
        return view('admin.occupation.create',$data);
    }

    public function show($id){
       
        $data['page_title'] = "Occupation Detail";
        $data['occupations'] = Occupation::where('onetsoc_code',$id)->first();
        if($data['occupations']){
            return view('admin.occupation.show',$data);
        }
        else{
            return redirect()->route('occupations.listing');
        }
    }

    public function update(Request $request, Occupation $occupation){
        $occupation = Occupation::where('onetsoc_code',$request->id)->first();
        //  dd($request->occupation_description);
        $new_occupation = [
            'onetsoc_code' => $request->id,
            'title' => $request->occupation_title,
            'description' => $request->occupation_description
        ];
        // $occupation->title = $request->occupation_title;
        // $occupation->description = $request->occupation_description;
        Occupation::where('onetsoc_code', $request->id)->update($new_occupation);
        // $occupation->save();
        $notification = array(
            'message' => 'Occupation Update Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('occupations.listing')->with($notification);

    }


    public function delete($id){
       Occupation::where('onetsoc_code', $id)->delete();
        // dd($occupation);    
        // if($occupation){
        //     $occupation->delete();
        // }
        $notification = array(
            'message' => 'Occupation has been deleted!',
            'alert-type' => 'success'
        );

        return redirect()->route('occupations.listing')->with($notification);
        
    }



    public function change_status(Member $member,string $status)
    {
        $notification = array(
            'message' => 'Status changed successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('occupations.listing')->with($notification);

    } 

    public function recommend_occupation(){
        $data['page_title'] = "User Occupation";
        $userSkils = explode(',', Auth::user()->occupation);
        // dd($userSkils);
        $data['occupations'] = Occupation::where(function ($query) use ($userSkils) {
            foreach ($userSkils as $term) {
                $query->orWhere('title', 'like', "%$term%");
                // ->orWhere('qualification_summary', 'like', "%$term%")
                // ->orWhere('major_duties', 'like', "%$term%");
            };
        })->get();
        // $data['occupations'] = Occupation::get();
        return view('admin.occupation.listing',$data);
    }

}
