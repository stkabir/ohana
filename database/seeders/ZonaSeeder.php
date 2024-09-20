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
                'clave' => '1'
            ],
            [
                'nombre' => 'CANCUN',
                'clave' => '2'
            ],
            [   
                'nombre' => 'PTO MORELOS',
                'clave' => '3'
            ],
            [
                'nombre' => 'PDC',
                'clave' => '4'
            ],
            [
                'nombre' => 'PTO AVENTURAS',
                'clave' => '5'
            ],
            [
                'nombre' => 'AKUMAL',
                'clave' => '6'
            ],
            [
                'nombre' => 'TULUM',
                'clave' => '7'
            ],
            [
                'nombre' => 'APTO CANCUN',
                'clave' => '8'
            ],
            [
                'nombre' => 'APTO TULUM',
                'clave' => '9'
            ]
        ];
        Zona::insert($zonas); 
        
    }
}
