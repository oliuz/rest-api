<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class TokenApiShipped extends Mailable
{
    use Queueable, SerializesModels;

    public $api_token;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($api_token)
    {
        $this->api_token = 'Bearer ' . $api_token;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('Mail.tokenApi')->subject('API Token');
    }
}
