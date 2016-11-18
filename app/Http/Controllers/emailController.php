<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;

class emailController extends Controller
{
    public function sendmail1(Request $request)
    {
        $data = array('name'=> $request->input('name'),'email'=>  $request->input('email'),'msg'=> $request->input('msg'));
        Mail::send('send', $data, function($message)  use ($data)
        {
         $message->to('sarvodayayouthfoundation@gmail.com')->subject
            ('Query');
         $message->from('sarvodayayouthfoundation@gmail.com','support');
        });
      return response("Sent Successfully");
    }

}
