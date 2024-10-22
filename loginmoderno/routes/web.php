<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DepartamentController;
use App\Http\Controllers\MunicipalityController;
use Barryvdh\DomPDF\Facade\Pdf as PDF;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/crear', function (){
    return view('posts.crear');
})->name('Crear');
Route::post('/', [PostController::class, 'store']);

Route::get('/Realidad', function () {
    return view('Realidad');
})->name('Realidad');

Route::get('/departamentos', [DepartamentController::class, 'index']);

//pdf
Route::get('/pdf', function () {
    // Asegúrate de tener la vista 'pdf.pdf' creada
    $pdf = PDF::loadView('pdf.pdf');
    
    return $pdf->stream();
})->name('pdf.generate');



//---------------------------CRUD--------------------------------------
Route::post('/municipios', [MunicipalityController::class,'municipios']);

?>