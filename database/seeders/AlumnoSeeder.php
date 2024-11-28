<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Alumno;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //


        //Insertaremos datos en la clase Alumno 
        $alumno = new Alumno(); 
        $alumno->nombre_ape = 'Andoni Egaña'; 
        $alumno->edad = 18; 
        $alumno->telefono = '658741112'; 
        $alumno->direccion = 'Pozas, 33'; 
        $alumno->save(); 

        $alumno = new Alumno(); 
        $alumno->nombre_ape = 'Iñaki Larrinaga'; 
        $alumno->edad = 20; 
        $alumno->telefono = '658775532'; 
        $alumno->direccion = 'Rodriguez Arias, 54'; 
        $alumno->save(); 

        $alumno = new Alumno(); 
        $alumno->nombre_ape = 'Garazi Pascual'; 
        $alumno->edad = 18; 
        $alumno->telefono = '699236859'; 
        $alumno->direccion = 'Ornilla, 76'; 
        $alumno->save();
    }
}
