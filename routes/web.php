<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

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
//Lara 8 (NEW)
Route::get('/products', [ProductsController::class, 'index']);
Route::get('/products/about', [ProductsController::class, 'about']);

////Route to users - Array(JSON)
//Route::get('/users', function (){
//    return ['PHP', 'HTML', 'Laravel'];
//});
//
////Route to users - JSON object
//Route::get('users', function (){
//   return response()->json([
//       'name' => 'ArtemSh',
//       'course' => 'Laravel 8 Course'
//   ]);
//});
//
////Route to users - function (to home)
//Route::get('/users', function (){
//    return redirect('/');
//});
