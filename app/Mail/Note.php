<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use stdClass;

class Note extends Mailable
{
    use Queueable, SerializesModels;

    protected stdClass $details;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(stdClass $details)
    {
        //
        $this->details = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('note-message')->with([
            "message"       =>$this->details->message,
            "name"      =>$this->details->name,
            "email"      =>$this->details->email,
            "subject" =>$this->details->subject
        ]);
    }
}
