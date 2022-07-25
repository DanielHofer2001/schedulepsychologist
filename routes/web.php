<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
/* OBTENCION DE EL HTML DE WELCOME */
Route::get('/', function () {
    return view('welcome');
});

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
Route::get('/evento', function () {
    return view('pag/admin/clientes');
});
Route::get('/agendar_hora', function () {
    return view('pag/admin/agendar_hora');
});


Auth::routes();

Route::group(['middleware' => ['auth']], function (){


Route::get('/gest_hora', [App\Http\Controllers\EventoController::class, 'mostrarTabla'])->name('gestion_hora');
Route::get('/prueba1/index', [App\Http\Controllers\ClienteController::class, 'mostrarTabla2'])->name('index');
Route::get('/admincliente', [App\Http\Controllers\ClienteController::class, 'mostrarTabla3'])->name('cliente');


//APARTADO RESERVAS

Route::post('/reserva/actualizar/{reserva}', [App\Http\Controllers\ReservaController::class, 'update']);
Route::post('/reserva/editar/{ID}', [App\Http\Controllers\ReservaController::class, 'edit']);
//Route::delete('/agendar/{ID}', [App\Http\Controllers\ReservaController::class, 'destroy'])->name('agendar.delete');
Route::post('/reserva/mostrar', [App\Http\Controllers\ReservaController::class, 'show']);
Route::post('/agendar', [App\Http\Controllers\ReservaController::class, 'store'])->name('agendar.store');
Route::get('/agendar', [App\Http\Controllers\ReservaController::class, 'mostrarReserva'])->name('agendar');
Route::get('/reserva/{reserva}', [App\Http\Controllers\ReservaController::class, 'index'])->name('reserva.index');

//TEST DELETE
Route::delete('/reserva/{reservaCliente}', [App\Http\Controllers\ReservaController::class, 'destroy'])->name('reserva.delete');


//APARTADO DE EVENTO - CALENDARIO

Route::get('/evento', [App\Http\Controllers\EventoController::class, 'index'])->name('evento.index');
Route::post('/evento/mostrar', [App\Http\Controllers\EventoController::class, 'show']);
Route::post('/evento/agregar', [App\Http\Controllers\EventoController::class, 'store']);
Route::post('/evento/editar/{ID}', [App\Http\Controllers\EventoController::class, 'edit']);
Route::post('/evento/actualizar/{evento}', [App\Http\Controllers\EventoController::class, 'update']);
Route::post('/evento/borrar/{ID}', [App\Http\Controllers\EventoController::class, 'destroy']);

//APARTADO CLIENTE - CLIENTE

//Route::get('/cliente', [App\Http\Controllers\ClienteController::class, 'index'])->name('pag.admin.clientes');
Route::get('/cliente', [App\Http\Controllers\ClienteController::class, 'index'])->name('pag.admin.clientes');
Route::post('/cliente/mostrar', [App\Http\Controllers\ClienteController::class, 'show']);
Route::post('index', [App\Http\Controllers\ClienteController::class, 'index']);
Route::post('/cliente/agregar', [App\Http\Controllers\ClienteController::class, 'store']);
Route::post('/cliente/editar/{ID}', [App\Http\Controllers\ClienteController::class, 'edit']);
Route::post('/cliente/actualizar/{evento}', [App\Http\Controllers\ClienteController::class, 'update']);
Route::post('/cliente/borrar/{ID}', [App\Http\Controllers\ClienteController::class, 'destroy']);

Route::resource('/prueba1', ClienteController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('/home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

});