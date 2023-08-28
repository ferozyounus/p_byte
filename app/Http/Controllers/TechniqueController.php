<?php

namespace App\Http\Controllers;

use App\Models\Technique;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class TechniqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['page_title'] = "Techniques List";
        $data['members'] =  Technique::orderByDesc('created_at')->get();
        return view('admin.techniques.listing',$data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['page_title'] = "New Technique";
        $data['category'] = Category::orderByDesc('created_at')->get();
        return view('admin.techniques.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        unset($input['_token']);
        // dd($input);
        try{
            DB::beginTransaction();
            $technique = new Technique();
            $technique->name = $input['name'];
            $technique->category = $input['category'];
            $technique->tags = $input['tag'];
            $technique->resources = $input['resource'];
            $technique->description = $input['description'];
            $technique->snippet = $input['snippet'];
            $technique->user_id = Auth::user()->name;
           $technique->save();
            $notification = array(
                'message' => 'Technique created!',
                'alert-type' => 'success'
            );
            DB::commit();
        }
        catch (\Throwable $th) {
          
           dd($th);
            $notification = array(
                'message' => 'Error Occured!',
                'alert-type' => 'error'
            );
            DB::rollback();
            return redirect()->back()->with($notification);
        }
        return redirect()->route('technique.listing')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Technique  $technique
     * @return \Illuminate\Http\Response
     */
    public function show(Technique $technique)
    {
        $data['page_title'] = "View Member";
        $data['member'] = $member;
        $data['usereducation'] = EducationExperience::where('user_id',$member->id)->orderBy('id','desc')->get();
        $data['workeexperience'] = Workexperience::where('user_id',$member->id)->orderBy('id','desc')->get();
    
        return view('admin.techniques.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Technique  $technique
     * @return \Illuminate\Http\Response
     */
    public function edit(Technique $technique)
    {
        $data['page_title'] = "Edit Member";
        $data['member'] = $member;
        return view('admin.techniques.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Technique  $technique
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Technique $technique)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Technique  $technique
     * @return \Illuminate\Http\Response
     */
    public function destroy(Technique $technique)
    {
        //
    }
}
