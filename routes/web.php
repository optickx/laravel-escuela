<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('alumnos', [AlumnoController::class, 'index'])->name('alumnos.index');


// Cambiar la ruta raíz para que apunte al listado de alumnos
Route::get('/', [AlumnoController::class, 'index'])->name('home');


// Ruta para mostrar un alumno específico por su ID
Route::get('alumnos/{id}', [AlumnoController::class, 'show'])->name('alumnos.show');

/* 
// Ruta para la búsqueda de alumnos
Route::get('alumnos/buscar', [AlumnoController::class, 'search'])->name('alumnos.search');
 */



// Ruta para mostrar la confirmación de eliminación
Route::get('alumnos/{id}/confirm-delete', [AlumnoController::class, 'confirmDelete'])->name('alumnos.confirmDelete');

// Ruta para realizar la eliminación de un alumno
Route::delete('alumnos/{id}', [AlumnoController::class, 'destroy'])->name('alumnos.destroy');
