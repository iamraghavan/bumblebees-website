<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Http;
use RyanChandler\LaravelCloudflareTurnstile\Rules\Turnstile;
use Illuminate\Support\Facades\Session;

use App\Jobs\SendContactEmail;
use Illuminate\Support\Facades\Validator;

class Contactpage extends Controller
{

    public function submit(Request $request)
    {


        // dd($request->all());
        // Validate the form data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'Lname' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Dispatch job to send email
        SendContactEmail::dispatch($request->all());

        // Set success message in session
        Session::flash('success', 'Your message has been sent successfully!');

        return back();
    }
}