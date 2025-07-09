<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Zona extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_itinerario',
        'nombre',
        'extension'
    ];

    public function ecorridos(): HasMany {
        return $this->hasMany(Recorrido::class,'id_zona');
    }

    public function itinerario(): BelongsTo {
        return $this->belongsTo(Itinerario::class,'id_itinerario');
    }
}
