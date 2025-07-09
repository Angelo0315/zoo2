<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Horario_cuidador extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha',
        'id_cuidador',
        'hora_entrada',
        'hora_salida'
    ];

    public function especies(): HasMany {
        return $this-> hasMany(Especie::class,'id_horario_cuidador');
    }

    public function cuidador(): BelongsTo {
        return $this-> belongsTo(Cuidador::class,'id_cuidador');
    }
}
