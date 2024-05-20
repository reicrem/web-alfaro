<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HerramientasController extends Controller
{
    public function herramientas(){
        return view('front.herramientas');
    }
}
