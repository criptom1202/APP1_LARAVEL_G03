<?php

use App\Http\Controllers\CargoController;
use App\Http\Controllers\TestController;


use Illuminate\Support\Facades\Route;

Route::prefix('intranet')->group(function(){
     Route::get('mostrar-cargos', [CargoController::class, 'mostrarDatos']);
     Route::get('test', TestController::class);




    // Route::get('cargos', [CargoController::class, 'index'])->name('cargo.index');
    // Route::get('cargos/create/', [CargoController::class, 'create'])->name('cargo.create');
    // Route::get('cargos/edit/{cargo}', [CargoController::class, 'edit'])->name('cargo.edit');
    // Route::post('cargos/store', [CargoController::class, 'store'])->name('cargo.store');
    // Route::put('cargos/update/{cargo}', [CargoController::class, 'update'])->name('cargo.update');
    // Route::delete('cargos/destroy/{cargo}', [CargoController::class, 'destroy'])->name('cargo.destroy');
    // Route::get('cargo/show/{id}', [CargoController::class, 'show'])->name('cargo.show');



    Route::resource('cargos', CargoController::class)->names('cargo');



});
