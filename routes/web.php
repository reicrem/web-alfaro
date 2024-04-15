<?php

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
Route::get('/catalogo', [HomeController::class, 'catalogo']);
// ver articulo
Route::get('/articulo/{id}', [FrontController::class, 'ver_articulo'])->name('articulo');
// ver categoria
Route::get('/categoria/{link}', [FrontController::class, 'ver_categoria'])->name('categoria');
