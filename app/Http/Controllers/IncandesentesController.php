<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IncandesentesController extends Controller
{
    public function incandesentes(){
        return view('front.incandesentes');
    }
}
