<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Maestro extends Model
{
    public function horario(): HasOne
    {
        return $this->hasOne(Horario::class);
    }

    public function clases()
    {
        return $this->belongsToMany(Clase::class);
    }

    use HasFactory;
}
