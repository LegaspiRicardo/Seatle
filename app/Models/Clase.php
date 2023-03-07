<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clase extends Model
{
    public function maestros()
    {
        return $this->belongsToMany(Maestro::class);
    }

    public function alumnos()
    {
        return $this->belongsToMany(Alumno::class);
    }

    use HasFactory;
}
