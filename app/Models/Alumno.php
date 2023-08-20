<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Alumno extends Model
{


    public function pagos()
    {
        return $this->hasMany(Pago::class);
    }

    public function grupos(): BelongsTo
    {
        return $this->belongsTo(Grupo::class);
    }

    public function niveles()
    {
        return $this->belongsTo(Nivel::class);
    }

    public function grupoMixtos(): BelongsTo
    {
        return $this->belongsTo(Grupo_mixto::class);
    }

    public function clases()
    {
        return $this->belongsToMany(Clase::class);
    }

    public function tutores()
    {
        return $this->belongsToMany(Tutor::class);
    }

    use HasFactory;


}
