<?php

use App\Http\Controllers\CargoController;
use App\Http\Controllers\TestController;


use Illuminate\Support\Facades\Route;

Route::prefix('intranet')->group(function(){
     Route::get('mostrar-cargos', [CargoController::class, 'mostrarDatos']);
     Route::get('test', TestController::class);




     Route::get('cargos', [CargoController::class, 'index'])->name('cargo.index');
     Route::get('cargos/create/', [CargoController::class, 'create'])->name('cargo.create');
    Route::get('cargos/edit/{id}', [CargoController::class, 'edit'])->name('cargo.edit');
    





});
