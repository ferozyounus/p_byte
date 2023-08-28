<?php
namespace App\Traits;

use Mail;

trait EmailTrait
{



    public function sendMail($data, $view){
        try {
            Mail::send($view, $data, function ($message) use ($data) {
                $message->subject($data['subject']);
                $message->from('info@gmail.com','FODC');
                $message->to($data['email']);
            });
            return true;
        } catch (Exception $e) {
            return false;
        }        
    }


   
}