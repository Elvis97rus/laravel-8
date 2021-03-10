<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [PagesController::class, 'index']);

Route::get('/about', [PagesController::class, 'about']);

Route::get('/portfolio', [PagesController::class, 'portfolio']);

//Lara 8 (NEW)
//Route::get('/products',
//    [ProductsController::class, 'index'])
//    ->name('products');

//Route::get('/products/{name}', [ProductsController::class, 'show']);

//Pattern is integer
//Route::get('/products/{id}', [ProductsController::class, 'show'])
//    ->where('id', '[0-9]+');

//Pattern is string
//Route::get('/products/{name}', [ProductsController::class, 'show'])
//    ->where('name', '[a-zA-Z]+');

//Pattern is string'n'integer combined
//Route::get('/products/{name}/{id}', [ProductsController::class, 'show'])
//    ->where([
//        'name' => '[a-zA-Z]+',
//        'id' => '[0-9]+'
//    ]);

// /products = all
// /products/productName = single
// /products/id = single
