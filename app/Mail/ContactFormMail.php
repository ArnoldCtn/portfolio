<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public $name,
        public $email, 
        public $messageContent
    ) {}

    public function build()
    {
        return $this->subject('New Message from Portfolio Contact Form')
                    ->view('emails.contact-form')
                    ->from('ctnarnold@gmail.com', 'ArnoldCtn Portfolio');
    }
}