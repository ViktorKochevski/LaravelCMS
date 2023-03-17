<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['web', 'auth'])->prefix('dashboard')->group(function () {
    Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::get('/user/create', [App\Http\Controllers\UserController::class, 'create'])->name('users.create');
    Route::post('/user', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');
    Route::get('/user/{user}', [App\Http\Controllers\UserController::class, 'show'])->name('users.show');
    Route::get('/user/{user}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
    Route::put('/user/{user}', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
    Route::delete('/user/{user}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.destroy');

    Route::get('/product', [App\Http\Controllers\ProductController::class, 'index'])->name('products.index');
    Route::get('/product/create', [App\Http\Controllers\ProductController::class, 'create'])->name('products.create');
    Route::post('/product', [App\Http\Controllers\ProductController::class, 'store'])->name('products.store');
    Route::get('/product/{product}', [App\Http\Controllers\ProductController::class, 'show'])->name('products.show');
    Route::get('/product/{product}/edit', [App\Http\Controllers\ProductController::class, 'edit'])->name('products.edit');
    Route::put('/product/{product}', [App\Http\Controllers\ProductController::class, 'update'])->name('products.update');
    Route::delete('/product/{product}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('products.destroy');

});
