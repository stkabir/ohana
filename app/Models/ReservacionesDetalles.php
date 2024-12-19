<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservacionesDetalles extends Model
{
    use HasFactory;

    protected $fillable = [
        'reservaciones_id',
        'subtotal',
        'impuestos'
    ];

    public static function guardaReservacionesDetalles(int $idReservacion, $subtotal, $impuestos = 0): int{
        $detalles = static::create([
            'reservaciones_id' => $idReservacion,
            'subtotal' => $subtotal,
            'impuestos' => $impuestos
        ]);

        return $detalles->id;
    }
}