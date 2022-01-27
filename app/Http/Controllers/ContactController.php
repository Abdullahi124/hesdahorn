<?php

namespace App\Http\Controllers;

use App\Mail\ContactEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function show()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        //validate submitted data
        $validated = $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $data = [
            'user' => $request->firstname . ' '. $request->lastname,
            'email' => $request->email,
            'message' => $request->message
        ];
        Mail::to('info@hesdahorn.com')->send(new ContactEmail($data));

        return redirect()->back()->with('Success');
    }
}
