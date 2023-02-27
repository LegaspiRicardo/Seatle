<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    public function alumnos()
    {
        return $this->belongsToMany(Alumno::class);
    }
    use HasFactory;
}
