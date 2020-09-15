<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Mail\TestMail;

class EmailController extends Controller
{
    public function index(){
        return view('email');
    }


    public function send(Request $request){

        // $file= $request->file('image');
        $data = [

            'nama'=> $request->nama,
            'email'=> $request->email,
            'contact'=> $request->contact,
            'image'=>$request->file('image')


        ];

        $to= 'bishal.sth.460@gmail.com';

        \Mail::to($to)->send(new \App\Mail\TestMail($data));

  echo "success";

    }
}
