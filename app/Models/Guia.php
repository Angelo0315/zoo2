<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Guia extends Model
{
    use HasFactory;


    protected $fillable = [
        'id_empleado',
        'fecha_ingreso'
    ];

    public function horario_guia(): HasMany {
        return $this->hasMany(Horario_guia::class, 'id_guia');
    }

    public function empleado(): BelongsTo {
        return $this->belongsTo(Empleado::class, 'id_empleado');
    }
}
