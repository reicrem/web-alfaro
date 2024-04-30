<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConsultaMail;

class ConsultaController extends Controller
{
    public function enviarConsulta(Request $request)
    {
        // Obtener los datos del formulario
        $nombre = $request->input('nombre');
        $telefono = $request->input('telefono');
        $correo = $request->input('correo');
        $marca = $request->input('marca');
        $pieza = $request->input('pieza');
        $patron = $request->input('patron');
        $anio = $request->input('anio');

        // Construir el enlace de Gmail con los datos del formulario
        $emailLink = "https://mail.google.com/mail/?view=cm&fs=1&to=kenywerjss17@gmail.com"
                    . "&su=Consulta"
                    . "&body=Nombre: $nombre%0ATeléfono: $telefono%0ACorreo: $correo%0AMarca: $marca%0APieza: $pieza%0APatrón de motor: $patron%0AAño: $anio";

        // Redirigir al enlace de Gmail
        return redirect()->away($emailLink);
    }
}
