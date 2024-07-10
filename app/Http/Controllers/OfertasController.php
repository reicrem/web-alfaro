<?php

namespace App\Http\Controllers;

use App\Models\Articulos;
use Illuminate\Http\Request;

class OfertasController extends Controller
{
    public function ofertas()
    {
        $articulos = Articulos::join("precios", "precios.codigo", "=", "articulos.codigo")
            ->select("articulos.id", "articulos.articulo as nombre", "precios.precio as price", "articulos.stock_minimo as stock", "articulos.imagen", "articulos.oferta")
            ->where("articulos.oferta", "=", "1")
            ->get();

        return view('front.ofertas', ['articulos' => $articulos]);
    }
}
