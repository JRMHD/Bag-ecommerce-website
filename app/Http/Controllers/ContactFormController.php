<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactForm;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use Exception;

class ContactFormController extends Controller
{
    public function submit(Request $request)
    {
        try {
            // Validate form data
            $validated = $request->validate([
                'full_name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'subject' => 'required|string|max:255',
                'phone' => 'nullable|string|max:15',
                'message' => 'required|string|max:1000',
            ]);

            // Store data in the database
            $contact = ContactForm::create($validated);

            // Send email
            Mail::to('jrmqhd@gmail.com')->send(new ContactFormMail($contact));

            // Flash success message
            return redirect()->back()->with('status', 'Your message has been sent successfully!')->with('status-type', 'success');
        } catch (Exception $e) {
            // Flash error message
            return redirect()->back()->with('status', 'There was an error sending your message. Please try again later.')->with('status-type', 'error');
        }
    }
}
