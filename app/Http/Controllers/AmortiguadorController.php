<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AmortiguadorController extends Controller
{
    public function amortiguador()
    {
        
        return view('front.amortiguador');
    }
}
