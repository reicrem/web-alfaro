<?php

namespace App\Http\Controllers;

use App\Models\Articulos;
use Illuminate\Http\Request;

class OfertasController extends Controller
{
    public function ofertas()
    {
        $articulos = Articulos::join("precios", "precios.codigo", "=", "articulos.id")
            ->join("categorias", "categorias.codigo", "=", "articulos.categoria")
            ->select("articulos.*", "precios.precio as price", "categorias.categoria as catego")
            ->where("articulos.oferta", "=", "1")
            ->get();

        return view('front.ofertas', ['articulos' => $articulos]);
    }
}
