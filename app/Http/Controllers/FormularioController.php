<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormularioController extends Controller
{
    public function index()
    {
        return view('front.formulario'); // Vista para mostrar el formulario
    }

    public function enviar(Request $request)
    {
        // Procesar los datos del formulario enviado
        // Por ejemplo, guardar en la base de datos, enviar correos, etc.
        return redirect()->route('formulario')->with('success', 'Formulario enviado correctamente.');
    }
}