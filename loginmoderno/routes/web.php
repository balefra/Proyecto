<?php

use App\Http\Controllers\InvestigationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DepartamentController;
use App\Http\Controllers\MunicipalityController;
use App\Http\Controllers\WorkaController;
//use Barryvdh\DomPDF\Facade\Pdf as PDF;
use App\Http\Controllers\PDFController;
use App\Mail\EnvioCorreo;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/crear', function () {
    return view('posts.Crear');
})->name('Crear');




Route::get('/Realidad', function () {
    return view('Realidad');
})->name('Realidad');

Route::get('/tipoestudio', function () {
    return view('vistas.tipoestudio');
})->name('tipoestudio');

Route::get('/formacionproyecto', function () {
    return view('vistas.formacionproyecto');
})->name('formacionproyecto');

Route::get('/inforealidades', function () {
    return view('vistas.inforealidades');
})->name('inforealidades');

Route::get('/informacionasociadas', function () {
    return view('vistas.informacionasociadas');
})->name('informacionasociadas');



Route::get('/infoenfoque', function () {
    return view('vistas.infoenfoque');
})->name('infoenfoque');

Route::get('/infoinvestigacion', function () {
    return view('vistas.infoinvestigacion');
})->name('infoinvestigacion');

Route::get('/enfoque', function () {
    return view('vistas.enfoque');
})->name('enfoque');

// vista dependiendo de tipo de investigación

Route::get('/vistaAnalitico', function () {
    return view('analitico.vistaAnalitico');
})->name('vistaAnalitico');

Route::get('/vistaIntervencion', function () {
    return view('intervencion.vistaIntervencion');
})->name('vistaIntervencion');

Route::get('/vistaDescriptivo', function () {
    return view('descritivo.vistaDescriptivo');
})->name('vistaDescriptivo');

Route::get('/buscarProyecto', function () {
    return view('vistas.buscarProyecto');
})->name('buscarProyecto');

Route::get('/objetivoInvestigacion', function () {
    return view('vistas.objetivoInvestigacion');
})->name('objetivoInvestigacion');

Route::get('/departamentos', [DepartamentController::class, 'index']);

//pdf
Route::get('/generar-pdf', [PDFController::class, 'generarPDF'])->name('generar.pdf');

//traer datos al pdf
Route::get('/infopdf/{registro}', [PDFController::class, 'generaridPDF']);


Route::post('/tablaBuscar', [PostController::class, 'buscarPorCorreo2']);

/*
//email
Route::get('/correo', function () {
    Mail::to('maria.c39robledo@gmail.com')
        ->send(new EnvioCorreo());
    return "mensaje enviado";
})->name('correo');
*/
Route::get('/correo', function () {
    Mail::to('maria.c39robledo@gmail.com')
        ->send(new EnvioCorreo);
    return "mensaje aa enviado";
})->name('correo');




//---------------------------CRUD Anidados--------------------------------------
Route::post('/municipios', [MunicipalityController::class, 'municipios']);
Route::post('/departamentos', [DepartamentController::class, 'departaments']);

//------------------------CRUD REGISTRO----------------------------------
Route::post('/', [PostController::class, 'store']);

Route::get('/workReality/{registro}', [PostController::class, 'update']);
Route::get('/workEnfoque/{registro}', [PostController::class, 'updateEnfoque']);
Route::get('/workInvesti/{registro}', [PostController::class, 'updateInvesti']);
Route::get('/workTecnicas/{registro}', [PostController::class, 'updateTecnicas']);

Route::post('/proyecto', [PostController::class, 'buscarPorCorreo']);
