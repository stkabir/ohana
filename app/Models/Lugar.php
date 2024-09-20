<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lugar extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'lugares';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'clave',
        'tipo',
        'zona_id',
    ];

    /**
     * Get the zona that owns the lugar.
     */
    public function zona()
    {
        return $this->belongsTo(Zona::class);
    }
}