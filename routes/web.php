<?php

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

Route::get('empleados/{nombre?}', function($nombre = null){
    return "Mi nombre es: " .  $nombre;
});

Route::get('inicio', function(){
    return view('inicio');
});

Route::view('laravel', 'welcome');






























