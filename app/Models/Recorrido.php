<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Recorrido extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_zona',
        'id_habitat',
        'id_especie'
    ];

    public function zona(): BelongsTo {
        return $this-> belongsTo(Zona::class, 'id_zona');
    }

    public function habitat(): BelongsTo {
        return $this-> belongsTo(Habitat::class, 'id_habitat');
    }

    public function especie(): BelongsTo {
        return $this-> belongsTo(Especie::class, 'id_especie');
    }
}
