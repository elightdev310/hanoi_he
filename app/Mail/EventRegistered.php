<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Submission;

class EventRegistered extends Mailable
{
    use Queueable, SerializesModels;

    public $submission;
    public $to_submitter;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Submission $submission, $to_submitter=true)
    {
        $this->submission = $submission;
        $this->to_submitter = $to_submitter;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $message = '';
        $title = '';
        if ($this->to_submitter) {
            $message = sprintf('You are registered to %s.', $this->submission->getEventTypeName());
            $title = sprintf('Registered to %s.', $this->submission->getEventTypeName());
        } else {
            $message = sprintf('%s are registered to %s.',
                $this->submission->first_name.' '.$this->submission->last_name,
                $this->submission->getEventTypeName());
            $title = $message;
        }
        return $this->view('emails.event_registered')
                    ->subject($title)
                    ->with(['mail_message'=> $message]);
    }
}
