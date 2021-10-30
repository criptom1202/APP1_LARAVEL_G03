<?php

use App\Http\Controllers\EmpleadoController;
use Illuminate\Support\Facades\Route;


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

Route::get('/', function () {
    return view('welcome');
});


Route::get('abc', function(){
    return "Mi primera página";
})->name('test.inicio');

Route::get('intranet/clientes', function(){
    return "<h1>KBSOLUCIONES</h1>";
});

Route::get('inicio', function(){
    return view('inicio');
});

Route::view('laravel', 'welcome');


Route::get('test1/{val}', function($val){
    return "Solicitud exitosa";
})->middleware('xyz');



Route::get('test2', function(){
    return "Falló";
})->name('t2');


Route::view('testeo', 'test');

Route::resource('empleados', EmpleadoController::class)->names('empleados');


























