<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.contact');
    }

    public function sendEmail(Request $request)
    {
//        dd($request);
        $details = [
          'name'=>$request->name,
          'email'=>$request->email,
          'msg'=>$request->msg,
        ];
        Mail::to('bgrfacile.contact@gmail.com')->send(new ContactMail($details));
        return back()->with('message_sent','votre message a été envoyer avec success.');
    }
}
