<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Inquiry extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $data;
    public function __construct($data)
    {
        $this->data = $data;
    }
    /**
     * Build the data.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New Inquiry')->markdown('emails.inquiry')->with('data',$this->data);
    }
}
