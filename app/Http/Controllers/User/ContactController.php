<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\contact;
use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function index() {
        return view('front.contact');
    }

    public function storeForm(Request $request) {
        $this->validate($request, [
           'name' => 'required',
           'email' => 'required|email',
           'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
           'userMessage' => 'required'
        ]);

        contact::create($request->all());

        \Mail::send('email', array(
            'name'=> $request->get('name'),
            'phone'=> $request->get('phone'),
            'email'=> $request->get('email'),
            'userMessage'=> $request->get('userMessage')
        ), function ($userMessage) use ($request) {
            $userMessage->from($request->email);
            $userMessage->to('olindo.testing@gmail.com')->subject('Hello Admin | New Appointment');
        });

        return back()->with('success', 'Thank you for contacting us. We will get back to you soon.');
    }
}
