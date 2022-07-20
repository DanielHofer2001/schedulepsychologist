<?php

use Illuminate\Support\Facades\Route;

/* OBTENCION DE EL HTML DE WELCOME */
Route::get('/', function () {
    return view('welcome');
});

/* OBTENCION DE EL HTML DE LA PAGINA DE INICIO */

/* OBTENCION DE EL HTML DE LA PAGINA DE LOGIN */


/* OBTENCION DE EL HTML DE LA PAGINA DE REGISTRO */

Route::get('/agendar', function () {
    return view('pag/cliente/agendar');
});


Route::get('/nosotros', function () {
    return view('pag/cliente/nosotros');
});
Route::get('/reagendar', function () {
    return view('pag/admin/reagendar');
});
Route::get('/gestion_consultas', function () {
    return view('pag/admin/gestion_consultas');
});
Route::get('/clientes', function () {
    return view('pag/admin/clientes');
});
Route::get('/agendar_hora', function () {
    return view('pag/admin/agendar_hora');
});


Auth::routes();

Route::get('/gest_hora', [App\Http\Controllers\EventoController::class, 'mostrarTabla'])->name('gestion_hora');

Route::get('/evento', [App\Http\Controllers\EventoController::class, 'index'])->name('evento.index');

Route::get('/evento/mostrar', [App\Http\Controllers\EventoController::class, 'show']);

Route::post('/evento/agregar', [App\Http\Controllers\EventoController::class, 'store']);

Route::post('/evento/editar/{ID}', [App\Http\Controllers\EventoController::class, 'edit']);

Route::post('/evento/actualizar/{evento}', [App\Http\Controllers\EventoController::class, 'update']);

Route::post('/evento/borrar/{ID}', [App\Http\Controllers\EventoController::class, 'destroy']);

Route::resource('agenda', App\Http\Controllers\HorasAdminController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
