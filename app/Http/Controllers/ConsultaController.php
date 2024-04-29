<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        // Construir el enlace de WhatsApp con los datos del formulario
        $whatsappLink = "https://wa.me/56982456101/?text=Consulta%20de%20$nombre%0A$telefono%0A$correo%0A$marca%0A$pieza%0A$patron%0A$anio";

        // Redireccionar al enlace de WhatsApp
        return redirect()->away($whatsappLink);
    }
}
