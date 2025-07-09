<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Habitat extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_especie',
        'clima',
        'vegetacion',
        'continente'
    ];

    public function recorridos(): HasMany {
        return $this-> hasMany(Recorrido::class,'id_habitat');
    }

    public function especie(): BelongsTo {
        return $this-> belongsTo(Especie::class,'id_especie');
    }
}
