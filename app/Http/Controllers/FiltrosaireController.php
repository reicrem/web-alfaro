<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FiltrosaireController extends Controller
{
    public function filtrosaire(){
        return view('front.filtrosaire');
    }
}
