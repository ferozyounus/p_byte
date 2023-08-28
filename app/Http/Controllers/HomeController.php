<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\TryCatch;
use Carbon\Carbon;
use App\Traits\EmailTrait;
use App\Models\Occupation;

class HomeController extends Controller
{


    use EmailTrait;

    /**
     * Create a new controller instance.
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){

        $data['blogs'] = [];
        return view('pages.home', $data);


    }

    public function aboutus(){
        $data['title'] = "About Us";
        return view('pages.aboutus', $data);
    }

    
    public function assigments(){
        $data['title'] = "Assigments";
        return view('pages.assigments', $data);
    }

    public function blogs(){
        $data['title'] = "Blogs";
        return view('pages.blogs', $data);
    }

    public function careers(){
        $data['title'] = "Careers";
        $data['occupations'] = Occupation::orderByDesc('created_at')->get();
        return view('pages.careers', $data);
    }

    public function contact_us(){
        $data['title'] = "Contact Us";
        return view('pages.contact_us', $data);
    }

    public function services(){
        $data['title'] = "Services";
        return view('pages.services', $data);
    }

    public function blog_and_podcasts(){
        $data['title'] = "Blog And Podcasts";
        return view('pages.blog_and_podcasts', $data);
    }

    

   
}
