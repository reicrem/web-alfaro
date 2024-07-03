<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LedController extends Controller
{
    public function led(){
        return view('front.led');
    }
}
