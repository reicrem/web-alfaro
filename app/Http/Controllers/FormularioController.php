<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConsultaMail;

class FormularioController extends Controller
{
    public function formulario()
    {
        return view('front.formulario');
    }

    public function enviarFormulario(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'telefono' => 'required|string|max:15',
            'correo' => 'required|email|max:255',
            'marca' => 'required|string|max:255',
            'pieza' => 'required|string|max:255',
            'patron' => 'required|string|max:255',
            'anio' => 'required|integer|min:1900|max:' . date('Y'),
        ]);

        // Enviar el correo
        Mail::to('kenywerjss17@gmail.com')->send(new ConsultaMail($request->all()));

        // Redirigir o mostrar un mensaje de éxito
        return response()->json(['message' => 'Consulta enviada correctamente']);
    }
}
