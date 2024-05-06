<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AguasController extends Controller
{
    public function aguas()
    {
        return view('front.aguas');
    }
}
