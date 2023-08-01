<?php

namespace Daa\Contact\Mail;


use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $message;
    public $name;
    /**
     * Create a new message instance.
     */
    public function __construct($message,$name)
    {
        $this->message=$message;
        $this->name=$name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Message from contact package')
            ->markdown('contact::contact.email')->with(['message'=>$this->message,'name'=>$this->name]);
    }
}
