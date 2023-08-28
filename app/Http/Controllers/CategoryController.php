<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Member;
use Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\SlugTrait;
use App\Traits\UploadTrait;
use App\Models\Occupation;
use SimpleXMLElement; 

class CategoryController extends Controller
{
    use SlugTrait;
    use UploadTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['page_title'] = "Category List";
        $data['members'] = Category::orderByDesc('created_at')->get();
        return view('admin.categories.listing',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['page_title'] = "New Category";
        return view('admin.categories.create',$data);
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
        try{
            DB::beginTransaction();
            $category = new Category();
            $category->category_name = $input['category'];
            $category->category_key = strtolower(str_replace(' ' , '-' , $input['category']));
            $category->user_id = Auth::user()->name;
            $category->status = 'approve';
         
           $category->save();
            $notification = array(
                'message' => 'Category created!',
                'alert-type' => 'success'
            );
            DB::commit();
        }
        catch (\Throwable $th) {
          
           
            $notification = array(
                'message' => 'Error Occured!',
                'alert-type' => 'error'
            );
            dd($category);
            DB::rollback();
            return redirect()->back()->with($notification);
        }
        return redirect()->route('category.listing')->with($notification);

      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $data['page_title'] = "Edit Category";
        $data['category'] = $category;
        return view('admin.categories.edit',$data);
    }
    public function change_status(Category $category,string $status)
    {


        try {

            $input['status'] = $status;
            DB::table('categories')
            ->where('id', $category->id)  
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

        return redirect()->route('category.listing')->with($notification);

    } 

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $input = $request->all();
        unset($input['_token']);
        // dd($input);
        try{
            DB::beginTransaction();
            // $category = $category->update($input);
            $category->category_name = $input['category'];
            $category->category_key = strtolower(str_replace(' ' , '-' , $input['category']));
            // $updatedCategory = Category::find($category->id);
           $category->save();
            $notification = array(
                'message' => 'Category updated!',
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

        return redirect()->route('category.listing')->with($notification);

    }

    public function delete( Category $category){
       
        $category->delete();
        $notification = array(
            'message' => 'Category has been deleted!',
            'alert-type' => 'success'
        );
        return redirect()->route('category.listing')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
