<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Itinerario extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_horario_guia',
        'id_guia',
        'fecha',
        'duracion',
        'longitud',
        'cantidad_personas',
        'cantidad_especies'
    ];

    public function zonas(): HasMany {
        return $this-> hasMany(Zona::class,'id_itinerario');
    }

    public function horario_guia(): BelongsTo {
        return $this-> belongsTo(Horario_guia::class,'id_horario_guia');
    }

    public function guia(): BelongsTo {
        return $this-> belongsTo(Guia::class,'id_guia');
    }
}
