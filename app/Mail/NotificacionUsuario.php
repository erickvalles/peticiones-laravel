<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotificacionUsuario extends Mailable
{
    use Queueable, SerializesModels;
    public $datosEmail;//arreglo con datos para el correo

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($datosEmail)
    {
        $this->datosEmail = $datosEmail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("Nuevas noticias de tu solicitud")->view('emails.notificacion');
    }
}
