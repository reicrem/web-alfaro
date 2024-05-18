<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarroceriaController extends Controller
{
    public function carroceria()
    {
        
        return view('front.carroceria');
    }
}
