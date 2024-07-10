<?php

namespace App\Http\Controllers;

use App\Models\Articulos;
use App\Models\Carro_compras;
use App\Models\detalle_carros;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request)
    {
        $articulo = Articulos::join("precios", "precios.codigo", "=", "articulos.id")
            ->select("articulos.*", "precios.precio as price")
            ->where("articulos.id", "=", $request->id)
            ->where("precios.estado", "=", "1")
            ->get();
        foreach ($articulo as $articulo) {
           Cart::add(
                $articulo->id,
                $articulo->articulo,
                1,
                $articulo->price,
                ["image" => $articulo->imagen1]
            );
        }
        return redirect()->back()->with("success", "producto agregado: " . $articulo->articulo);
    }

    public function checkout()
    {
        return view('front.cart.checkout');
    }

    public function cart()
    {
        return view('front.cart.cart');
    }

    public function comprar(Request $request)
    {
        $email = $request->emailcompra;
        return view('front.cart.shop',['email' => $email]);
    }

    public function remove(Request $request)
    {
        Cart::remove($request->rowId);
        return redirect()->back()->with("success", "producto eliminado");
    }

    public function clear()
    {
        Cart::destroy();
        return redirect()->back()->with("success", "carro vacio");
    }

    public function increaseQuantity(Request $request)
    {
        $item = Cart::get($request->rowId);
        $qty = $item->qty + 1;
        Cart::update($request->rowId, $qty);

        return redirect()->back();
    }

    public function decreaseQuantity(Request $request)
    {
        $item = Cart::get($request->rowId);
        $qty = $item->qty - 1;
        Cart::update($request->rowId, $qty);
        return redirect()->back();
    }

    public function storeshop(Request $request)
    {
        $carro = new Carro_compras;
        $carro->nombre = $request->nombre;
        $carro->apellido = $request->apellido;
        $carro->rut = $request->rut;
        $carro->email = $request->email;
        $carro->telefono = $request->telefono;
        $carro->direccion = $request->direccion;
        $carro->numero = $request->numero;
        $carro->comuna = $request->comuna;
        $carro->region = $request->region;
        $carro->tneto = Cart::subtotal();
        $carro->iva = Cart::tax();
        $carro->total = Cart::total();
        $carro->estado = 1;
        $carro->save();
        $tmpcarro = $carro->id;
        foreach (Cart::content() as $item) {
            $deta_carro = new detalle_carros;
            $deta_carro->codigo = $tmpcarro;
            $deta_carro->articulo = $item->name;
            $deta_carro->cantidad = $item->qty;
            $deta_carro->precio = $item->price;
            $deta_carro->tot = $item->qty*$item->price;
            $deta_carro->estado = 1;
            $deta_carro->save();
        };
        Cart::destroy();
        return view('front.cart.envia');
    }

}