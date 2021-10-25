<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'personas';
  protected $fillable = ['name', 'lastname'];
  protected $guarded = ['id'];
    use HasFactory;

    public function Prestamos()
    {
        return $this->belongsTo(Prestamo::class);

    }
}
