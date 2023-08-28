<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Traits\SlugTrait;
use App\Traits\UploadTrait;
use App\Models\Occupation;
use App\Models\EducationExperience;
use App\Models\Member;
use Auth;


class EducationController extends Controller
{


    use SlugTrait;
    use UploadTrait;

    public function index(){
       
    }


    public function getlist(){

        $data['educationExperiences'] = EducationExperience::where('user_id', Auth::user()->id)->orderBy('id','desc')->get();
        return view('admin.profiles.education_card',$data);

    }



    public function store(Request $request){

       
        $this->validate($request, []);
        
        $input = $request->all();
        unset($input['_token']);

        $input['user_id'] = Auth::user()->id;
        
        $inputMember['education_check'] = 1;
        try{
            DB::beginTransaction();
            Member::where('id', Auth::user()->id)->update($inputMember);
            $educationExperience =EducationExperience::create($input);
            DB::commit();
            return response()->json(['success'=>'Form is successfully submitted!']);
        }
        catch (\Throwable $th) {
            DB::rollback();
        }
    }

    
    public function delete(EducationExperience $education){
       
        $education->delete();
        $notification = array(
            'message' => 'Job has been deleted!',
            'alert-type' => 'success'
        );
        
        return redirect()->route('profiles.listing')->with($notification);
        
    }


    public function edit(Request $request){

        $data['educationExperiences'] = EducationExperience::where('id',$request->id)->first();
        return view('admin.profiles.education_modal',$data);

    }




    public function updates(Request $request){

        $this->validate($request, []);
        
        $input = $request->all();
        unset($input['_token']);
        unset($input['education_id']);
    
        try{
            DB::beginTransaction();
            EducationExperience::where('id',$request->education_id)->update($input);
            DB::commit();
            return response()->json(['success'=>'Form is successfully submitted!']);
        }
        catch (\Throwable $th) {
            DB::rollback();
        }
    }

}
