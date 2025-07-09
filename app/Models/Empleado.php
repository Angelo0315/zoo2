<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Empleado extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'apellido_p',
        'apellido_m',
        'telefono',
        'direccion',
        'fecha_ingreso',
        'tipo_empleado'
    ];

    public function guia(): HasOne {
        return $this->hasOne(Guia::class, 'id_empleado');
    }

    public function cuidador(): HasOne {
        return $this->hasOne(Cuidador::class,'id_empleado');
    }
}
