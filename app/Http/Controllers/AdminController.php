<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Traits\SlugTrait;
use App\Traits\UploadTrait;
use App\Models\User;
use App\Models\linkedin_job;
use App\Models\Job;
use App\Models\Occupation;
use Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    use SlugTrait;
    use UploadTrait;


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


     
    public function index(){

        $data['page_title'] = 'Dasboard'; 
        $data['members'] = User::where('role_id',2)->count(); 
        $data['jobs'] = linkedin_job::count(); 
        $data['occupations'] = Occupation::count();
        $data['occupationsList'] = Occupation::take(7)->get();
        $data['user_info'] = DB::table('users')
                 ->select('occupation', DB::raw('count(*) as total'))
                 ->groupBy('occupation')
                 ->orderBy('total', 'desc')
                 ->get();
        return view('admin.dashboard', $data);
        
    }


    public function profile(){

        $data['page_title'] = 'Edit Profile';  
        return view('admin.profile', $data);
        
    }

   
    public function update(Request $request, User $user){


        $input = $request->all();
        unset($input['_token']);
        

        try{
            DB::beginTransaction();

        
                $input['image'] = isset($input['image'])?$input['image']:null;
        
                if($input['image']!=null){
                    $checkName = strtotime(date("Y-m-d h:i:sa"));
                    $input['image'] = $this->uploadImage($input['image'], $checkName,'uploads/user/','public');
                }
               
                User::where('id', Auth::user()->id)->update($input);
          
            $notification = array(
                'message' => 'Profile updated!',
                'alert-type' => 'success'
            );
            DB::commit();
            
        }
        catch (\Throwable $th) {
            $notification = array(
                'message' => 'Error Occured!',
                'alert-type' => 'error'
            );
            DB::rollback();
        }
        return redirect()->route('admin.profile')->with($notification);

    }

    public function update_password(Request $request, User $user){

        $input = $request->all();
        unset($input['_token']);
        unset($input['confirm_password']);

        try{
            DB::beginTransaction();
            $input['password'] =  Hash::make($input['password'] );   
            User::where('id', Auth::user()->id)->update($input);
            $notification = array(
                'message' => 'Profile Password Updated!',
                'alert-type' => 'success'
            );
            DB::commit();
            
        }
        catch (\Throwable $th)
         { 
            $notification = array(
                'message' => 'Error Occured!',
                'alert-type' => 'error'
            );
            DB::rollback();
        }
        return redirect()->route('admin.profile')->with($notification);


    }

}

