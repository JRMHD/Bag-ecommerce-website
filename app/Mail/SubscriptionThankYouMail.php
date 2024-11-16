<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SubscriptionThankYouMail extends Mailable
{
    use Queueable, SerializesModels;

    public $subscriberEmail;

    public function __construct($subscriberEmail)
    {
        $this->subscriberEmail = $subscriberEmail;
    }

    public function build()
    {
        return $this->subject('Thank You for Subscribing!')
            ->view('emails.subscription_thank_you');
    }
}
