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
        'servicio_id',
        'origen_id',
        'destino_id',
        'pax1',
        'pax2',
        'precio',
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
}