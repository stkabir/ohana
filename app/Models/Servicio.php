<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'servicios';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'tipo',
    ];

    /**
     * Scope a query to search by name.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  string  $search
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeSearch($query, $search) {
        return empty($search) ? $query : $query->where('nombre', 'like', '%'.$search.'%');
    }
}