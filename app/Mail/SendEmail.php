<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $email;

    /**
     * Create a new message instance.
     *
     * @param  string  $content
     * @return void
     */
    public function __construct($email)
    {
        $this->email = $email;
    }

    /**
     * Build the email message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->to('recipient@example.com') // Set the recipient's email address
            ->subject('Subject of the Email') // Set the email subject
            ->text('emails.send_email_plain_text'); // Set the plain text email view
    }
}

