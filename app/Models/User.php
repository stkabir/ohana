<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {
    protected $table = 'usuarios';

    protected $fillable = [
        'nombre',
        'correo',
        'password',
        'activo',
        'correo_verificado',
        'fecha_creado',
        'fecha_actualizado'
    ];
}
