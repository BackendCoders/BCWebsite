<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;

class ContactReplyMail extends Mailable
{
    public array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: config('mail.contact.reply_subject', 'Thanks for contacting us'),
            from: new Address(
                config('mail.contact.from_address', config('mail.from.address')),
                config('mail.contact.from_name', config('mail.from.name'))
            ),
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact-reply',
            with: [
                'data' => $this->data,
                'supportEmail' => config('mail.contact.admin_email', config('mail.from.address')),
            ],
        );
    }
}
