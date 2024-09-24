<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Unidad;

class UnidadesSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $unidades = [
            [
                'nombre'=>'Toyota Hiace',
                'capacidad'=> '8',
                'tipo'=> 'Mediana',
                'imagen'=> ''
            ],[
                'nombre'=>'Nissan Urvan',
                'capacidad'=> '10',
                'tipo'=> 'Mediana',
                'imagen'=> ''
            ],[
                'nombre'=>'Ford Custom',
                'capacidad'=> '7',
                'tipo'=> 'Mediana',
                'imagen'=> ''
            ],[
                'nombre'=>'Jac Sunray',
                'capacidad'=> '12',
                'tipo'=> 'Grande',
                'imagen'=> ''
            ],[
                'nombre'=>'Ford Transit',
                'capacidad'=> '12',
                'tipo'=> 'Grande',
                'imagen'=> ''
            ],[
                'nombre'=>'Nissan Road',
                'capacidad'=> '8',
                'tipo'=> 'Mediana',
                'imagen'=> ''
            ],
        ];
        Unidad::insert($unidades);
    }
}
