<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AceitemotosController extends Controller
{
    public function aceitemotos(){
        return view('front.aceitemotos');
    }
}
