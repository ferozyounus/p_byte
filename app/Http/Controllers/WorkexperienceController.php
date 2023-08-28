<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Traits\SlugTrait;
use App\Traits\UploadTrait;
use App\Models\Occupation;
use App\Models\Workexperience;
use App\Models\Member;

use Auth;

class WorkexperienceController extends Controller
{

    use SlugTrait;
    use UploadTrait;

    public function index(){
     
    }


    public function getlist(){

        $data['workexperiences'] = Workexperience::where('user_id', Auth::user()->id)->orderBy('id','desc')->get();
        return view('admin.profiles.work_card',$data);

    }

    public function store(Request $request){

        $this->validate($request, []);
        
        $input = $request->all();
        unset($input['_token']);

        $input['user_id'] = Auth::user()->id;
      
        $inputMember['work_experience_check'] = 1;
        try{
            DB::beginTransaction();

            // if($request->working_skills){
            //     $input['working_skills'] = implode(',', $request->working_skills);
            // }
            
            Member::where('id', Auth::user()->id)->update($inputMember);
            $workexperience = Workexperience::create($input);
    
            DB::commit();
            return response()->json(['success'=>'Form is successfully submitted!']);
        }
        catch (\Throwable $th) {
            DB::rollback();
        }
    }


    public function edit(Request $request){

        $data['workexperiences'] = Workexperience::where('id',$request->id)->first();
        return view('admin.profiles.working_modal',$data);

    }


    public function update(Request $request){

        $this->validate($request, []);
        
        $input = $request->all();
        unset($input['_token']);
        unset($input['working_id']);
    
      
        try{
            DB::beginTransaction();

            // if($request->working_skills){
            //     $input['working_skills'] = implode(',', $request->working_skills);
            // }
            Workexperience::where('id',$request->working_id)->update($input);
            DB::commit();
            return response()->json(['success'=>'Form is successfully submitted!']);
        }
        catch (\Throwable $th) {
            DB::rollback();
        }
    }


    public function delete(Workexperience $workexperience){
       
        $workexperience->delete();
        $notification = array(
            'message' => 'Job has been deleted!',
            'alert-type' => 'success'
        );
        
        return redirect()->route('profiles.listing')->with($notification);
        
    }

}
