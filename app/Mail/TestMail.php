<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $nama = $this->data['nama'];
        $email = $this->data['email'];
        $contact = $this->data['contact'];

        return $this->subject('CV for JOB')
                    ->view('email_template',compact('nama','email','contact'))
                    ->attach($this->data['image']->getRealPath(),[
                        'as' => $this->data['image']->getClientOriginalName()
                    ]);
    }
}
