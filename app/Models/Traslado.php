<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Traslado extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'traslados';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tarifa_id',
        'nombre',
        'email',
        'telefono',
        'estatus',
    ];

    /**
     * Get the tarifa that owns the traslado.
     */
    public function tarifa()
    {
        return $this->belongsTo(Tarifa::class);
    }
}