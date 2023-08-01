<?php

namespace Daa\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Daa\Contact\Mail\ContactMailable;
use Daa\Contact\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show(){
        return view('contact::contact');
    }
    public function send(Request $request){

        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message,$request->name));

        Contact::create($request->all());
        return redirect(route('contact'));
    }
}
