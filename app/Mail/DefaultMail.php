<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class DefaultMail extends Mailable
{
    public function __construct(
        public string $subjectText,
        public string $messageText
    ) {
    }

    public function build()
    {
        return $this->subject($this->subjectText)
            ->view('emails.default')
            ->with([
                'message' => $this->messageText,
            ]);
    }
}