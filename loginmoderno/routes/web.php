<?php

use App\Http\Controllers\InvestigationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DepartamentController;
use App\Http\Controllers\MunicipalityController;
use App\Http\Controllers\WorkaController;
//use Barryvdh\DomPDF\Facade\Pdf as PDF;
use App\Http\Controllers\PDFController;





Route::get('/', function () {
   return view('welcome'); 
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/crear', function (){
    return view('posts.crear');
})->name('Crear');

//------------------------CRUD REGISTRO----------------------------------
Route::post('/', [PostController::class, 'store']);

Route::get('/work/{registro}',[PostController::class,'update']);



Route::get('/Realidad', function () {
    return view('Realidad');
})->name('Realidad');

Route::get('/tipoestudio', function () {
    return view('vistas.tipoestudio');
})->name('tipoestudio');

Route::get('/formacionproyecto', function () {
    return view('vistas.formacionproyecto');
})->name('formacionproyecto');

Route::get('/enfoque', function () {
    return view('vistas.enfoque');
})->name('enfoque');



Route::get('/departamentos', [DepartamentController::class, 'index']);

//pdf
Route::post('/generar-pdf', [PDFController::class, 'generarPDF'])->name('generar.pdf');



/*Route::get('/pdf', function () { //habilitado
    // Asegúrate de tener la vista 'pdf.pdf' creada
   $pdf = PDF::loadView('pdf.pdf');//habilitado
       
    return $pdf->stream();   //habilitado
})->name('pdf.generate');//habilitado */



//---------------------------CRUD Municipios--------------------------------------
Route::post('/municipios', [MunicipalityController::class,'municipios']);


?>