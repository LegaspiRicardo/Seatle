<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Horario extends Model
{

    public function maestros(): BelongsTo
    {
        return $this->belongsTo(Maestro::class);
    }

    use HasFactory;
}
