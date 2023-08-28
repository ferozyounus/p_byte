<?php
use App\Models\Settings;
use App\Models\Content;
use App\Models\Menu;

// use File;


// if (!function_exists('ifUserHasImage')) {
//     function ifUserHasImage($logo)
//     {
//         if ($logo == '' || $logo == null) {
//             return false;
//         }
//         if (File::exists(public_path('storage' . $logo))) {
//             return 'storage' . $logo;
//         } else {
//             return false;
//         }
//     }
// }


if (!function_exists('header_menu_listing')) {

    function header_menu_listing(){
    return Menu::where('type',1)->get();
    }

}


if (!function_exists('footer_menu_listing')) {

    function footer_menu_listing(){
    return Menu::where('type',2)->get();
    }

}


   if (!function_exists('contact_setting')) {

        function contact_setting(){
        return Settings::where('status',1)->first();
        }

    }

    if (!function_exists('get_content')) {

        function get_content($page, $slug){
        $content = Content::where(['page' => $page, 'slug' => $slug])
        ->first();
		return isset($content) ? $content->content : '';
        }

    }

    if (!function_exists('get_heading')) {

        function get_heading($page, $slug){
        $content = Content::where(['page' => $page, 'slug' => $slug])->first();
		return isset($content) ? $content->heading : '';
        }

    }

    if (!function_exists('get_image')) {

        function get_image($page, $slug){
        $content = Content::where(['page' => $page, 'slug' => $slug])->first();
		return isset($content) ? 'storage/'.$content->image : '';
        }

    }
