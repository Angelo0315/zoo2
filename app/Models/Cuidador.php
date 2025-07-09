<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cuidador extends Model
{
    use HasFactory;



    protected $fillable = [
        'id_empleado',
        'fecha_ingreso'
    ];

    public function horario_cuidador(): HasMany {
        return $this->hasMany(Horario_cuidador::class,'id_cuidador');
    }

    public function empleado(): BelongsTo {
        return $this->belongsTo(Empleado::class,'id_empleado');
    }
}
