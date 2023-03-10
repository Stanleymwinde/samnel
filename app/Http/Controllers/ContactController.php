<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use App\Mail\insureFormMail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        );

        Mail::to('murimib08@gmail.com')->send(new ContactFormMail($data));

        return redirect()->route('contact')->with('success_message', 'Your message was sent successfully,! we will get back to you shortly.');
    }

    public function insure(Request $request)
    {
        $info = array(

            'fname' => $request->name,
            'lname' => $request->name,
            'email' => $request->email,
            'phone' => $request->subject,
            'address' => $request->message,
            'country' => $request->message,
            'age' => $request->message,
            'insurer' => $request->message
        );

        Mail::to('murimib08@gmail.com')->send(new insureFormMail($info));

        return redirect()->route('home')->with('success_message', 'Your message was sent successfully,! we will get back to you shortly.');
    }
}
