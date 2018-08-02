<?php

namespace App\Mail;

use App\WebinarRegister;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;


class WebinarRegistered extends Mailable
{
    use Queueable, SerializesModels;

    public $wr;
    public $to_submitter;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(WebinarRegister $wr, $to_submitter=true)
    {
        $this->wr = $wr;
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
            $title = sprintf('Registered at webinar.');
            $view = 'emails.webinar_registered_submitter';
            return $this->view($view)
                ->subject($title);
        } else {
            $message = sprintf('%s are registered at webinar.',
                $this->wr->first_name.' '.$this->wr->last_name);
            $title = $message;

            return $this->view('emails.webinar_registered')
                ->subject($title)
                ->with(['mail_message'=> $message]);
        }

    }
}
