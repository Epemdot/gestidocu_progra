<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procesos extends Model
{
    use HasFactory;
    protected $fillable=['nombre_proc','descripcion','id_cli'];

    public function Cliente()
    {
        return $this->belongsto(Clientes::class,'id_cli');
    }
}
