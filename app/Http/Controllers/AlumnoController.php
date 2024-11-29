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
    public function show($id)
    {
        $alumno = Alumno::find($id);

        if (!$alumno) {
            return redirect()->route('alumnos.index')->with('error', 'Alumno no encontrado.');
        }

        return view('alumnos.show', compact('alumno'));
    }

    // Método para buscar alumnos por nombre
    public function search(Request $request)
    {
        $query = $request->input('query');
        $alumnos = Alumno::where('nombre', 'like', '%' . $query . '%')->get();

        return view('alumnos.index', compact('alumnos'));
    }

    // Método para mostrar la confirmación de eliminación
    public function confirmDelete($id)
    {
        $alumno = Alumno::find($id);

        if (!$alumno) {
            return redirect()->route('alumnos.index')->with('error', 'Alumno no encontrado.');
        }

        return view('alumnos.confirm_delete', compact('alumno'));
    }

    // Método para eliminar un alumno
    public function destroy($id)
    {
        $alumno = Alumno::find($id);

        if (!$alumno) {
            return redirect()->route('alumnos.index')->with('error', 'Alumno no encontrado.');
        }

        $alumno->delete();

        return redirect()->route('alumnos.index')->with('success', 'Alumno eliminado correctamente.');
    }

    // Método para eliminar un alumno
    public function delete($id)
    {
        $alumno = Alumno::find($id);

        if ($alumno) {
            $alumno->delete();
            return redirect()->route('alumnos.index')->with('success', 'Alumno eliminado correctamente.');
        }

        return redirect()->route('alumnos.index')->with('error', 'Alumno no encontrado.');
    }
}
