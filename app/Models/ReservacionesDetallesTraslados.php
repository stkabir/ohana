<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservacionesDetallesTraslados extends Model
{
    use HasFactory;

    protected $fillable = [
        'reservaciones_detalles_id',
        'lugar_inicio_id',
        'lugar_fin_id',
        'fecha',
        'hora',
        'aerolinea',
        'numero_vuelo',
    ];

    public static function guardarReservacionesDetallesTraslados($idDetalles, $lugarInicio, $lugarFin, $fecha, $hora = null, $aerolinea = null, $numeroVuelo = null) {
        static::create([
            'reservaciones_detalles_id' => $idDetalles,
            'lugar_inicio_id' => $lugarInicio,
            'lugar_fin_id' => $lugarFin,
            'fecha' => $fecha,
            'hora' => $hora,
            'aerolinea' => $aerolinea,
            'numero_vuelo' => $numeroVuelo,
        ]);
    }
}