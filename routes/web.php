<?php

use Illuminate\Support\Facades\Route;
//Se agrego esta linea
use Illuminate\Support\Facades\View;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', 'App\Http\Controllers\InicioController@index');

Route::resource('/', 'App\Http\Controllers\PersonaController');

/*if (View::exists('vista2'))
{
    Route::get('/', function () {
        return view('vista1', ['nombre' => 'Juan']);
    });
}else {
    Route::get('/', function () {
        return 'La vista solicitada no existe';
    });
}*/

/*Route::get('/', function () {
    return view('vista1', ['nombre' => 'Juan']);
});*/

/*Route::get('/texto', function() {
    return '<h1>esto es un texto de prueba</h1>';
});

Route::get('/nombre/{nombre}', function($nombre) {
    return '<h1>El nombre es: '.$nombre.' </h1>';
});

Route::get('/cliente/{cliente?}', function($cliente='Cliente general') {
    return '<h1>El cliente es: '.$cliente.' </h1>';
});

Route::get('/arreglo', function() {
    //$arreglo = ['lunes', 'martes', 'miércoles'];
    $arreglo = ['Id' => '1',
    'Descripcion' => 'Producto 1'
    ];
    return $arreglo;
});

Route::get('/ruta1', function() {
    return '<h1>esta es la vista de la ruta 1</h1>';
})->name('rutaNro1');

Route::get('/ruta2', function() {
    //return '<h1>esta es la vista de la ruta 2</h1>';
    return redirect()->route('rutaNro1');
});

Route::get('/usuario/{usuario}', function ($usuario) {
    return '<h1>El usuario es:'.$usuario.'</h1>';
//})->where('usuario', '[0-9]+');
})->where('usuario', '[A-Za-z]+');
*/

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
