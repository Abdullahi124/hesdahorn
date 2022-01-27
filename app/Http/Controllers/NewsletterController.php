<?php

namespace App\Http\Controllers;

use App\Models\MailingList;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function submit(Request $request)
    {
        //validate email
        //add the email to mailing list
        //send welcome email to user
        //redirect back to home
        $validated = $request->validate([
            'email' => 'required|email|unique:mailing_lists',
        ]);

        $email = MailingList::create(['email' => $request->email]);

        return redirect('/');
    }
}
