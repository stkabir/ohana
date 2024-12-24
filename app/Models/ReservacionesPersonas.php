<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservacionesPersonas extends Model
{
    use HasFactory;

    protected $fillable = [
        'reservaciones_id',
        'nombre',
    ];

    public static function guardaPersonas($idReservacion, $personas) {
        $fn = function(string $v) use ($idReservacion) {
            return ['reservaciones_id'=> $idReservacion, 'nombre' => $v];
        };

        static::insert(array_map($fn, $personas));
    }
}