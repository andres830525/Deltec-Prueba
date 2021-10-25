<?php

namespace App\Models;

use App\Models\Prestamo as ModelsPrestamo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{ protected $table = 'prestamos';
    protected $fillable = [ 'idPersona', 'idRecurso', 'estado','estado_recurso','id'];

    use HasFactory;

    public function Persona()
    {
        return $this->hasOne(Persona::class);
    }
}
