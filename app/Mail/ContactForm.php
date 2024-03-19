<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;

    public $formData2;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($formData2)
    {
        $this->formData2 = $formData2;
    }

    /**
     * Build the message.
     *
     * @return $this
     */

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Bumble Bees Website | Contact Form',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.contactForm',
        );
    }


    public function build()
    {
        return $this->markdown('emails.contact2')
            ->subject('Bumble Bees Website | Contact Form');
    }
}