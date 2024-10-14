<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Lugar;

class LugaresSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lugares = [
            [
                'nombre'=>'FINEST PLAYA MUJERES',
                'zona_id'=>1
            ],[
                'nombre'=>'GRAND PALLADIUM COSTA MUJERES',
                'zona_id'=>1
            ],[
                'nombre'=>'SECRETS RIVIERA CANCUN',
                'zona_id'=>2
            ],[
                'nombre'=>'AZUL BEACH RIVIERA CANCUN',
                'zona_id'=>2
            ],[
                'nombre'=>'DREAMS JADE RESORT',
                'zona_id'=>3
            ],[
                'nombre'=>'DREAMS VISTA CANCUN',
                'zona_id'=>3
            ],[
                'nombre'=>'5TA AVENIDA PLAYA DEL CARMEN',
                'zona_id'=>4
            ],[
                'nombre'=>'A PERFECT PALACE PDC',
                'zona_id'=>4
            ],[
                'nombre'=>'BARCELO MAYA BEACH',
                'zona_id'=>5
            ],[
                'nombre'=>'BARCELO MAYA CARIBE',
                'zona_id'=>5
            ],[
                'nombre'=>'BAHIA PRINCIPE AKUMAL',
                'zona_id'=>6
            ],[
                'nombre'=>'BAHIA PRINCIPE COBA',
                'zona_id'=>6
            ],[
                'nombre'=>'CONRAD TULUM',
                'zona_id'=>7
            ],[
                'nombre'=>'SUPER AKI TULUM ',
                'zona_id'=>7
            ],[
                'nombre'=>'AEROPUERTO',
                'zona_id'=>8
            ],[
                'nombre'=>'AEROPUERTO TULUM',
                'zona_id'=>9
            ]
        ];
        Lugar::insert($lugares);
    }
}
