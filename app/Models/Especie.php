<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Especie extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_horario_cuidador',
        'id_cuidador',
        'nombre',
        'nombre_cientifico',
        'descripcion'
    ];

    public function habitats(): HasMany {
        return $this->hasMany( Habitat::class, 'id_especie');
    }

    public function recorridos(): HasMany {
        return $this->hasMany(Recorrido::class,'id_especie');
    }

    public function cuidador(): BelongsTo {
    return $this->belongsTo(Cuidador::class, 'id_cuidador');
}

    public function horario_cuidador(): BelongsTo {
    return $this->belongsTo(Horario_cuidador::class, 'id_horario_cuidador');
}

}
