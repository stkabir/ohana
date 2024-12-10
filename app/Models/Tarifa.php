<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarifa extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tarifas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'origen_id',
        'destino_id',
        'unidad_id',
        'pax1',
        'pax2',
        'precio1',
        'precio2'
    ];

    /**
     * Get the servicio that owns the tarifa.
     */
    public function servicio()
    {
        return $this->belongsTo(Servicio::class);
    }

    /**
     * Get the origen lugar that owns the tarifa.
     */
    public function origen()
    {
        return $this->belongsTo(Lugar::class, 'origen_id');
    }

    /**
     * Get the destino lugar that owns the tarifa.
     */
    public function destino()
    {
        return $this->belongsTo(Lugar::class, 'destino_id');
    }

    /**
     * Get the unidad that owns the tarifa.
     */
    public function unidad() {
        return $this->belongsTo(Unidad::class, 'unidad_id');
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

        return $query->where('pax1', 'like', '%'.$search.'%')
        ->orWhereHas('servicio', function ($q) use ($search) {
            $q->where('nombre', 'like', '%'.$search.'%');
        })
        ->orWhereHas('origen', function ($q) use ($search) {
            $q->where('nombre', 'like', '%'.$search.'%');
        })
        ->orWhereHas('destino', function ($q) use ($search) {
            $q->where('nombre', 'like', '%'.$search.'%');
        })
        ->orWhereHas('unidad', function ($q) use ($search) {
            $q->where('nombre', 'like', '%'.$search.'%');
        });
    }
}