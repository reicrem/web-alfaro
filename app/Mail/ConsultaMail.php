<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ConsultaMail extends Mailable
{
    use Queueable, SerializesModels;

    public $nombre;
    public $telefono;
    public $correo;
    public $marca;
    public $pieza;
    public $patron;
    public $anio;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nombre, $telefono, $correo, $marca, $pieza, $patron, $anio)
    {
        $this->nombre = $nombre;
        $this->telefono = $telefono;
        $this->correo = $correo;
        $this->marca = $marca;
        $this->pieza = $pieza;
        $this->patron = $patron;
        $this->anio = $anio;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Consulta Mail')
                    ->view('emails.consulta'); // Puedes crear una vista específica para el correo electrónico
    }
}
