<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
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

Route::get('/', [ProductController::class, 'index'])->name('index');
Route::get('/create', [ProductController::class, 'create'])->name('create');
Route::post('/store', [ProductController::class, 'store'])->name('store');
Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [ProductController::class, 'update'])->name('update');
Route::delete('/destroy/{id}', [ProductController::class, 'destroy'])->name('destroy');

Route::get('/order', [OrderController::class, 'index'])->name('order.index');
Route::get('/order/create/{id}', [OrderController::class, 'create'])->name('order.create');
Route::post('/order/store', [OrderController::class, 'store'])->name('order.store');

Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
Route::get('/order-history', [HomeController::class, 'history'])->name('order.history');


