<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recurso extends Model
{
    protected $table = 'recursos';
  protected $fillable = ['category', 'name', 'brand', 'serie','id','estado'];

    use HasFactory;

    public function prestamo()
    {
        return $this->belongsTo(prestamo::class);
    }
}
