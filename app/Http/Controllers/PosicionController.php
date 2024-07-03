<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PosicionController extends Controller
{
    public function posicion(){
        return view('front.posicion');
    }
}
