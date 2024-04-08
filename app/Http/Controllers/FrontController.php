<?php

namespace App\Http\Controllers;

use App\Models\Articulos;
use App\Models\Banner;
use App\Models\Categorias_destacadas;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
      $articulos = Articulos::join("precios", "precios.codigo", "=", "articulos.id")
        ->join("categorias", "categorias.codigo", "=", "articulos.categoria")
        ->select("articulos.*", "precios.precio as price", "categorias.categoria as catego")
        ->where("articulos.destacado", "=", "1")
        ->get();
      $banner = Banner::get();
  
      $cate_desta = Categorias_destacadas::join("categorias", "categorias.codigo", "=", "categorias_destacadas.codigo")
        ->select("categorias_destacadas.*", "categorias.categoria as cate")
        ->get();
  
      return view('front.index', ['articulos' => $articulos, 'cate_desta' => $cate_desta, 'banner' => $banner]);
    }
  
    public function ver_articulo($id)
      {
          $articulo = Articulos::join("precios", "precios.codigo", "=", "articulos.id")
          ->join("categorias", "categorias.codigo", "=", "articulos.categoria")
              ->select("articulos.*", "precios.precio as price", "categorias.categoria as catego")
              ->where("articulos.id", "=", $id)
              ->get();
  
          return view('front.articulo', ['articulos' => $articulo]);
      }
  
  
    public function ver_categoria($link)
    {
      $categoria = Articulos::join("precios", "precios.codigo", "=", "articulos.id")
        ->join("categorias", "categorias.codigo", "=", "articulos.categoria")
        ->select("articulos.*", "precios.precio as price", "categorias.categoria as titulo")
        ->where("articulos.categoria", "=", $link)
        ->get();
  
      $titulo = Articulos::join("categorias", "articulos.categoria", "=", "categorias.codigo")
        ->select("categorias.categoria as titulo")
        ->where("articulos.categoria", "=", $link)
        ->groupBy('titulo')
        ->get();
  
      return view('front.categorias', ['categorias' => $categoria, 'titulo' => $titulo]);
    }
}
