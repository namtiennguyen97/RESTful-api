<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/product',[\App\Http\Controllers\ProductController::class,'index'])->name('product.api.index');
Route::post('/product/create',[\App\Http\Controllers\ProductController::class,'store'])->name('product.api.store');
Route::delete('/product/destroy/{id}',[\App\Http\Controllers\ProductController::class,'destroy'])->name('product.api.delete');
Route::post('/product/update/{id}',[\App\Http\Controllers\ProductController::class,'update'])->name('product.api.update');
