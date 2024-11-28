<?php

// app/Http/Controllers/AlumnoController.php
namespace App\Http\Controllers;

use App\Models\Alumno; 
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function index()
    {
        $alumnos = Alumno::all();  // Obtiene todos los alumnos
        return view('alumnos.index', compact('alumnos'));  // Pasa los datos a la vista
    }

    // Método para mostrar un alumno específico por su ID
    /* public function show($id)
    {
        // Encuentra al alumno por su ID
        $alumno = Alumno::find($id);

        // Verifica si se encontró el alumno
        if (!$alumno) {
            // Si no se encuentra, redirige con un mensaje de error
            return redirect()->route('alumnos.index')->with('error', 'Alumno no encontrado.');
        }

        // Si se encuentra, muestra la vista con los datos del alumno
        return view('alumnos.show', compact('alumno'));
    } */
}
