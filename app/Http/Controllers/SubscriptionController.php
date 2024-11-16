<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;
use App\Mail\SubscriptionThankYouMail;
use Illuminate\Support\Facades\Mail;

class SubscriptionController extends Controller
{
    public function subscribe(Request $request)
    {
        // Validate email
        $request->validate([
            'email' => 'required|email|unique:subscribers,email',
        ]);

        try {
            // Store the subscriber in the database
            $subscriber = Subscriber::create(['email' => $request->email]);

            // Send the thank you email
            Mail::to($subscriber->email)->send(new SubscriptionThankYouMail($subscriber->email));

            // Return success response
            return response()->json(['success' => 'Thank you for subscribing! We have sent a confirmation email to your inbox.']);
        } catch (\Exception $e) {
            // Return error response
            return response()->json(['error' => 'There was an error with your subscription. Please try again later.']);
        }
    }
}
