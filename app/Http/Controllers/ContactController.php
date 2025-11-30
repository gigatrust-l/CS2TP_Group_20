<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request){
        // Validate form inputs
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|min:5',
        ]);
        // Save the message in the database
        Contact::create([
            'e_name' => $request->name,
            'e_email' => $request->email,
            'e_subject' => $request->subject,
            'e_message' => $request->message,
        ]);
        // Redirect and success message
        return back()->with('status', 'Thanks for contacting us! We will get back to you as soon as possible.');
    }
}
