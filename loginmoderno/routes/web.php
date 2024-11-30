<?php


use App\Http\Controllers\InvestigationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DepartamentController;
use App\Http\Controllers\MunicipalityController;
use App\Http\Controllers\WorkaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
//use Barryvdh\DomPDF\Facade\Pdf as PDF;
use App\Http\Controllers\PDFController;
use App\Mail\EnvioCorreo;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::post('/dirigir', [LoginController::class, 'dirigir']);

Route::get('/admin',[AdminController::class,'index'])
->middleware(App\Http\Middleware\AdminAuth::class)
->name('admin.index');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/redirigirAdmin', [App\Http\Controllers\HomeController::class, 'admin'])->name('home');
Route::get('/redirigirEstudiante', [App\Http\Controllers\HomeController::class, 'estudiante'])->name('home');

Route::get('/crear', function () {
    return view('posts.Crear');
})->name('Crear');





Route::get('/Realidad', function () {
    return view('Realidad');
})->name('Realidad');

Route::get('/tipoestudio', function () {
    return view('vistas.tipoestudio');
})->name('tipoestudio');

Route::get('/formacionproyecto/{id}', function ($id) {
    return view('vistas.formacionproyecto', compact('id'));
})->name('formacionproyecto');

Route::get('/inforealidades/{id}', function ($id) {
    return view('vistas.inforealidades', compact('id'));
})->name('inforealidades');

Route::get('/informacionasociadas/{id}', function ($id) {
    return view('vistas.informacionasociadas', compact('id'));
})->name('informacionasociadas');



Route::get('/infoenfoque/{id}', function ($id) {
    return view('vistas.infoenfoque', compact('id'));
})->name('infoenfoque');

Route::get('/infoinvestigacion/{id}', function ($id) {
    return view('vistas.infoinvestigacion', compact('id'));
})->name('infoinvestigacion');

Route::get('/enfoque', function () {
    return view('vistas.enfoque');
})->name('enfoque');

// vista dependiendo de tipo de investigación

Route::get('/vistaAnalitico/{id}', function ($id) {
    return view('analitico.vistaAnalitico', compact('id'));
})->name('vistaAnalitico');

Route::get('/vistaIntervencion/{id}', function ($id) {
    return view('intervencion.vistaIntervencion', compact('id'));
})->name('vistaIntervencion');

Route::get('/vistaDescriptivo/{id}', function ($id) {
    return view('descritivo.vistaDescriptivo', compact('id'));
})->name('vistaDescriptivo');

Route::get('/buscarProyecto', function () {
    return view('vistas.buscarProyecto');
})->name('buscarProyecto');

Route::get('/objetivoInvestigacion/{id}', function ($id) {
    return view('vistas.objetivoInvestigacion', compact('id'));
})->name('objetivoInvestigacion');

Route::get('/objetivoInvestigacion2/{id}', function ($id) {
    return view('vistas.objetivoInvestigacion2', compact('id'));
})->name('objetivoInvestigacion2');

Route::get('/flex', function () {
    return view('vistas.pruebaflex');
})->name('pruebaflex');




//pdf
Route::get('/generar-pdf', [PDFController::class, 'generarPDF'])->name('generar.pdf');

//traer datos al pdf
Route::get('/infopdf/{registro}', [PDFController::class, 'generaridPDF']);


Route::post('/tablaBuscar', [PostController::class, 'buscarPorCorreo2']);

Route::post('/tablaBuscarDocente', [PostController::class, 'buscarPorCorreoDocente']);



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
Route::get('/objetivos/{registro}', [PostController::class, 'updateObjetivos']);

Route::post('/proyecto', [PostController::class, 'buscarPorCorreo']);
