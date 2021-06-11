<?php

namespace App\Http\Controllers;
use App\Mail\ContactForMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function getContact(){
        return view('pages.contact');
    }
    public function envoie(){
        
       $data=request()->validate([
            'name'=>'required',
            'mail'=>'required|email',
            'message'=>'required'
        ]);
        Mail::to('dhaouiala95@gmail')->send(new ContactForMail($data));


        
    }
    //
}
