<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;

class ContactMail extends Mailable
{
    public array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    // SUBJECT
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Contact Message',
            from: new Address(
                config('mail.from.address'),
                config('mail.from.name')
            ),
            replyTo: [
                new Address(
                    $this->data['email'] ?? config('mail.from.address'),
                    trim(($this->data['first_name'] ?? '').' '.($this->data['last_name'] ?? '')) ?: ($this->data['email'] ?? config('mail.from.address'))
                ),
            ],
        );
    }

    // VIEW FILE
    public function content(): Content
    {
        return new Content(
            view: 'emails.contact',
            with: [
                'data' => $this->data,
            ],
        );
    }
}
