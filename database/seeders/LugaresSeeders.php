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
                'zona_id'=>1,
                'clave' => 'FPM'
            ],[
                'nombre'=>'GRAND PALLADIUM COSTA MUJERES',
                'zona_id'=>1,
                'clave' => 'GPCM'
            ],[
                'nombre'=>'SECRETS RIVIERA CANCUN',
                'zona_id'=>2,
                'clave' => 'SRC'
            ],[
                'nombre'=>'AZUL BEACH RIVIERA CANCUN',
                'zona_id'=>2,
                'clave' => 'ABRC'
            ],[
                'nombre'=>'DREAMS JADE RESORT',
                'zona_id'=>3,
                'clave' => 'DJR'
            ],[
                'nombre'=>'DREAMS VISTA CANCUN',
                'zona_id'=>3,
                'clave' => 'DVC'
            ],[
                'nombre'=>'5TA AVENIDA PLAYA DEL CARMEN',
                'zona_id'=>4,
                'clave' => '5APC'
            ],[
                'nombre'=>'A PERFECT PALACE PDC',
                'zona_id'=>4,
                'clave' => 'APPP'
            ],[
                'nombre'=>'BARCELO MAYA BEACH',
                'zona_id'=>5,
                'clave' => 'BMB'
            ],[
                'nombre'=>'BARCELO MAYA CARIBE',
                'zona_id'=>5,
                'clave' => 'BMC'
            ],[
                'nombre'=>'BAHIA PRINCIPE AKUMAL',
                'zona_id'=>6,
                'clave' => 'BPA'
            ],[
                'nombre'=>'BAHIA PRINCIPE COBA',
                'zona_id'=>6,
                'clave' => 'BPC'
            ],[
                'nombre'=>'CONRAD TULUM',
                'zona_id'=>7,
                'clave' => 'CT'
            ],[
                'nombre'=>'SUPER AKI TULUM ',
                'zona_id'=>7,
                'clave' => 'SAT'
            ],[
                'nombre'=>'AEROPUERTO',
                'zona_id'=>8,
                'clave' => 'APC'
            ],[
                'nombre'=>'AEROPUERTO TULUM',
                'zona_id'=>9,
                'clave' => 'APT'
            ]
        ];
        Lugar::insert($lugares);
    }
}
