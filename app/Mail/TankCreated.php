<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class TankCreated extends Mailable
{
    use Queueable, SerializesModels;

    public $tank;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($tank)
    {
        $this->tank = $tank;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mails.tankCreated');
    }
}
