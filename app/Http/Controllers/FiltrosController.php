<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FiltrosController extends Controller
{
    public function filtros()
    {
        return view('front.filtros');
    }
}
