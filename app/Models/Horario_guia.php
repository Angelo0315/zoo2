<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Horario_guia extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha',
        'id_guia',
        'hora_entrada',
        'hora_salida'
    ];

    public function itinerario(): HasMany {
        return $this->hasMany(Itinerario::class, 'id_horario_guia');
    }

    public function guia(): BelongsTo {
        return $this->belongsTo(Guia::class, 'id_guia');
    }
}
