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
        if ($this->to_submitter) {
            $title = sprintf('Registered at %s.', $this->submission->getEventTypeName());
            $view = '';
            if ($this->submission->type == 'hcm-08-09-2018') {
                $view = 'emails.hcm_event_registered_submitter';
            } else {
                $view = 'emails.hanoi_event_registered_submitter';
            }
            return $this->view($view)
                        ->subject($title);
        } else {
            $message = sprintf('%s are registered at %s.',
                $this->submission->first_name.' '.$this->submission->last_name,
                $this->submission->getEventTypeName());
            $title = $message;

            return $this->view('emails.event_registered')
                ->subject($title)
                ->with(['mail_message'=> $message]);
        }

    }
}
