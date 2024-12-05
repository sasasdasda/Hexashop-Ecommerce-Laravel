<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

use Illuminate\Mail\Mailables\Address;

class SendLoginMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $data = null;
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('samakaip1@gmail.com','samakaip1@gmail.com'),
            to: new Address('soof850@gmail.com','soof850@gmail.com'),
            subject: 'Verfication Code',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.loginTemplate',
            with: with($this->data),
        );
    }
    public function build()
    {
        return $this->subject('Mail Notify')
        ->from('soof850@gmail.com')
        ->to('samakaip1@gmail.com')
        ->view('mail');
                    // Assuming your email view file is named 'mail_notify.blade.php'
    }
    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
