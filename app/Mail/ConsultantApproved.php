<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

use App\Consultant;


class ConsultantApproved extends Mailable
{
    use Queueable, SerializesModels;

    public $consultant;

    /**
     * Create a new message instance.
     *
     * @return void


     */
    public function __construct(Consultant $consultant)
    {
        $this->consultant = $consultant;
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.consultantapproved')->with([
            'email'=>$this->consultant->email,
        ]);
    }
}
