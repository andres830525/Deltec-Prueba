<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historial extends Model
{protected $table = 'historials';
    protected $fillable = [ 'idPersona', 'idRecurso', 'estado_recurso','id'];

    use HasFactory;
}
