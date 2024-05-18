<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BateriasController extends Controller
{
    public function baterias(){

        return view('front.baterias');
    }
}
