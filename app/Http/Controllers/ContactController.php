<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Http;
use RyanChandler\LaravelCloudflareTurnstile\Rules\Turnstile;

use App\Jobs\SendContactEmail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function submitForm(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'contactNumber' => 'required',
            'appointmentTime' => 'nullable|date_format:H:i',
            'appointmentDate' => 'nullable|date',
            'cf-turnstile-response' => ['required', app(Turnstile::class)],
        ]);

        // Your existing code

        return response()->json(['status' => 'success', 'message' => 'Your Request has been sent successfully! We will get back to you shortly.']);
    }
}