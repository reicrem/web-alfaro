<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IluminacionController extends Controller
{
    public function iluminacion(){
        return view('front.iluminacion');
    }
}
