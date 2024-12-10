<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Zona;

class ZonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $zonas = [
            [
                'nombre' => 'COSTA MUJERES',
                'clave' => '1',
                'aeropuerto' => false
            ],
            [
                'nombre' => 'CANCUN',
                'clave' => '2',
                'aeropuerto' => false
            ],
            [   
                'nombre' => 'PTO MORELOS',
                'clave' => '3',
                'aeropuerto' => false
            ],
            [
                'nombre' => 'PDC',
                'clave' => '4',
                'aeropuerto' => false
            ],
            [
                'nombre' => 'PTO AVENTURAS',
                'clave' => '5',
                'aeropuerto' => false
            ],
            [
                'nombre' => 'AKUMAL',
                'clave' => '6',
                'aeropuerto' => false
            ],
            [
                'nombre' => 'TULUM',
                'clave' => '7',
                'aeropuerto' => false
            ],
            [
                'nombre' => 'APTO CANCUN',
                'clave' => '8',
                'aeropuerto' => true
            ],
            [
                'nombre' => 'APTO TULUM',
                'clave' => '9',
                'aeropuerto' => true
            ]
        ];
        Zona::insert($zonas); 
        
    }
}
