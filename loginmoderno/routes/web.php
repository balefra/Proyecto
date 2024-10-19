<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/crear', function () {
    return view('posts.crear');
})->name('Crear');
Route::post('/', [PostController::class, 'store']);

Route::get('/Realidad', function () {
    return view('Realidad');
})->name('Realidad');