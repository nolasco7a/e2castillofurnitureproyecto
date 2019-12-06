<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Cotizacion extends Mailable
{
    use Queueable, SerializesModels;
    public $contactMessage;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contactMessage)
    {
        $this->contactMessage = $contactMessage;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->from('nolasco7a@gmail.com')
        ->subject('Cotizacion pagina web')
        ->to('nolasco7a@gmail.com')
        ->view('mail.cotization');
    }
}
