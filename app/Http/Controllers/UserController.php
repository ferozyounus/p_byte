<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Traits\SlugTrait;
use App\Traits\UploadTrait;


class UserController extends Controller
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
        return view('user.dashboard', $data);
        
    }

   
}
