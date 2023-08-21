<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/', [ProductController::class,'index'])->name('products.index');
Route::get('/create',[ProductController::class,'create'])->name('products.create');
Route::post('/store',[ProductController::class,'store'])->name('products.store');
Route::get('/edit/{product}',[ProductController::class,'edit'])->name('products.edit');
Route::put('/update/{product}',[ProductController::class,'update'])->name('products.update');
Route::delete('/destroy/{product}',[ProductController::class,'destroy'])->name('products.destroy');
Route::get('/show/{product}',[ProductController::class,'show'])->name('products.show');


