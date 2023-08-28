<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Traits\SlugTrait;
use App\Traits\UploadTrait;
use App\Models\Member;
use App\Models\EducationExperience;
use App\Models\Workexperience;
use Illuminate\Support\Facades\Hash;

class MemberController extends Controller
{


    use SlugTrait;
    use UploadTrait;

    public function index(){
        $data['page_title'] = "Members List";
        $data['members'] = Member::where('role_id',2)->orderBy('id','desc')->get();
        return view('admin.members.listing',$data);
    }
    
    public function create(){
        $data['page_title'] = "New Members";

        return view('admin.members.create',$data);
    }

    public function store(Request $request){

        
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000'
        ]);

        $input = $request->all();
        unset($input['_token']);
        unset($input['confirm_password']);

        $input['image'] = isset($input['image'])?$input['image']:null;
        if($input['image']!=null){
            $checkName = strtotime(date("Y-m-d h:i:sa"));
            $input['image'] = $this->uploadImage($input['image'], $checkName,'uploads/user/','public');
        }
        else{
            $input['image'] = "";
        }
        $input['status'] = 1;
        $input['is_email_verified'] = 1;
        $input['password'] = Hash::make($input['password']);
        try{
            DB::beginTransaction();
            $member =Member::create($input);
            $notification = array(
                'message' => 'Member created!',
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
            return redirect()->back()->with($notification);
        }
        return redirect()->route('members.listing')->with($notification);
    }

    public function edit(Member $member){
        $data['page_title'] = "Edit Member";
        $data['member'] = $member;
        return view('admin.members.edit',$data);
    }


    public function show(Member $member){
        $data['page_title'] = "View Member";
        $data['member'] = $member;
        $data['usereducation'] = EducationExperience::where('user_id',$member->id)->orderBy('id','desc')->get();
        $data['workeexperience'] = Workexperience::where('user_id',$member->id)->orderBy('id','desc')->get();
    
        return view('admin.members.show',$data);
    }

    

    public function update(Request $request, Member $member){
       
        // dd($member);
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            // 'password' => ['string', 'min:8'],
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000'
        ]);
        
        $input = $request->all();
        unset($input['_token']);
        unset($input['confirm_password']);

        $input['image'] = isset($input['image'])?$input['image']:null;
        if($input['image']!=null){
            $checkName = strtotime(date("Y-m-d h:i:sa"));
            $input['image'] = $this->uploadImage($input['image'], $checkName,'uploads/user/','public');
        }
        else{
            $input['image'] = $member->image;
        }
       
        if($request->password){
            $input['password'] = Hash::make($input['password']);
        }else{
            $input['password'] = $member->password;
        }

        try{
            DB::beginTransaction();
            $member =$member->update($input);
            $notification = array(
                'message' => 'Member updated!',
                'alert-type' => 'success'
            );
            DB::commit();
        }
        catch (\Throwable $th) {
            // dd($th);
            $notification = array(
                'message' => 'Error Occured!',
                'alert-type' => 'error'
            );
            DB::rollback();
            return redirect()->back()->with($notification);
        }

        return redirect()->route('members.listing')->with($notification);

    }


    public function delete(Member $member){
       
        $member->delete();
        $notification = array(
            'message' => 'Member has been deleted!',
            'alert-type' => 'success'
        );
        
        return redirect()->route('members.listing')->with($notification);
        
    }



    public function change_status(Member $member,string $status)
    {


        try {

            $input['status'] = (int)$status;
            DB::table('users')
            ->where('id', $member->id)  
            ->update($input);

    

           $notification = array(
               'message' => 'Status changed successfully!',
               'alert-type' => 'success'
           );
        } catch (\Throwable $th) {
      
            $notification = array(
                'message' => $th->getmessage(),
                'alert-type' => 'error'
            );
        }

        return redirect()->route('members.listing')->with($notification);

    } 

    

}
