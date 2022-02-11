<?php

namespace App\Http\Controllers;

use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Console\Input\Input;

class mailController extends Controller
{

    public function send(){
        Mail::send('mail.contact', array('key' => 'value'), function($message)
        {
            $message->to('msozkan90@gmail.com', 'MUHAMMED')->subject('Welcome!');
        });
    }
    public function mail_post(Request $request){
        $body = $request['message'];
        $details = [
            'name' =>  $request['name'],
            'email' =>  $request['email'],
            'number' =>  $request['number'],
            'title' =>  $request['subject'],
            'start-date'=> $request['start-date'],
            'finish-date'=> $request['finish-date'],
//            'name'=>$request['name'],
//            'email'=>$request['email'],
            'body' => $body,
        ];
        $all = $request->except('_token','terms');
        $insert = \App\Models\mail::create($all);
        $c=\Mail::to('msozkan90@gmail.com')->send(new \App\Mail\MyTestMail($details));
        if($insert){
            return redirect()->back()->with('status','Mesajınız Başarılı Bir Şekilde Gönderildi.');
        }
        else{
            return redirect()->back()->with('status','Bir Hata Oluştu');

        }
    }
}
