<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'reservaciones';


    public function cliente() {
        return $this->hasOne(Cliente::class, 'id', 'cliente_id');
    }

    public function detalles() {
        return $this->hasOneThrough(
            ReservacionesDetallesTraslados::class,
            ReservacionesDetalles::class,
            'reservaciones_id',
            'reservaciones_detalles_id',
        );
    }

    public function pasajeros() {
        return $this->hasMany(ReservacionesPersonas::class, 'reservaciones_id');
    }

    /**
     * Scope a query to search by name and related models.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  string  $search
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeSearch($query, $search) {
        if (empty($search)) {
            return $query;
        }
        return $query->where('folio', 'like', '%'.$search.'%');
    }
}