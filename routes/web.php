<?php

use App\Http\Controllers\FormularioController;
use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\FrontController::class, 'index']);

Route::post('cart/add', [App\Http\Controllers\CartController::class, 'add'])->name('add');
Route::get('cart/checkout', [App\Http\Controllers\CartController::class, 'checkout'])->name('checkout');
Route::get('cart/cart', [App\Http\Controllers\CartController::class, 'cart'])->name('cart');
Route::get('cart/clear', [App\Http\Controllers\CartController::class, 'clear'])->name('clear');
Route::post('cart/remove', [App\Http\Controllers\CartController::class, 'remove'])->name('remove');

Route::post('cart/comprar', [App\Http\Controllers\CartController::class, 'comprar'])->name('comprar');
Route::post('cart/storeshop', [App\Http\Controllers\CartController::class, 'storeshop'])->name('storeshop');

Route::post('cart/increaseQuantity', [App\Http\Controllers\CartController::class, 'increaseQuantity'])->name('increaseQuantity');
Route::post('cart/decreaseQuantity', [App\Http\Controllers\CartController::class, 'decreaseQuantity'])->name('decreaseQuantity');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//------------------------------------

// ver articulo
Route::get('/articulo/{id}', [FrontController::class, 'ver_articulo'])->name('articulo');
// ver categoria
Route::get('/categoria/{link}', [FrontController::class, 'ver_categoria'])->name('categoria');

// Ir al formulario
Route::get('/formulario', [App\Http\Controllers\FormularioController::class, 'formulario'])->name('formulario'); 

// Ir al producto
Route::get('/producto',[App\Http\Controllers\ProductoController::class, 'producto' ])->name('producto');

//Ir al catalogo
Route::get('/catalogo',[App\Http\Controllers\CatalogoController::class, 'catalogo' ])->name('catalogo');
Route::get('/catalogo2',[App\Http\Controllers\Catalogo2Controller::class, 'catalogo2' ])->name('catalogo2');
Route::get('/catalogo3',[App\Http\Controllers\Catalogo3Controller::class, 'catalogo3' ])->name('catalogo3');
Route::get('/catalogo4',[App\Http\Controllers\Catalogo4Controller::class, 'catalogo4' ])->name('catalogo4');
Route::get('/catalogo5',[App\Http\Controllers\Catalogo5Controller::class, 'catalogo5' ])->name('catalogo5');

Route::post('/enviar-consulta', [ConsultaController::class, 'enviarConsulta'])->name('enviar.consulta');

//ir a aceites y sus paginas
Route::get('/aceite',[App\Http\Controllers\AceiteController::class, 'aceite' ])->name('aceite');
Route::get('/aceite2', [App\Http\Controllers\Aceite2Controller::class, 'aceite2'])->name('aceite2');

//ir a filtros
Route::get('/filtros',[App\Http\Controllers\FiltrosController::class, 'filtros'])->name('filtros');

//ir a las aguas
Route::get('/aguas',[App\Http\Controllers\AguasController::class, 'aguas'])->name('aguas');
Route::get('/aguas2',[App\Http\Controllers\Aguas2Controller::class, 'aguas2'])->name('aguas2');

//ir a amortiguadores
Route::get('/amortiguador',[App\Http\Controllers\AmortiguadorController::class, 'amortiguador'])->name('amortiguador');


//ir a carroceria
Route::get('/carroceria',[App\Http\Controllers\CarroceriaController::class, 'carroceria'])->name('carroceria');

//ir a baterias
Route::get('/baterias',[App\Http\Controllers\BateriasController::class, 'baterias'])->name('baterias');
