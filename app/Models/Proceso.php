<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proceso extends Model
{
    use HasFactory;
    protected $fillable=['nombre_proc','descripcion','id_cli'];

    public function Cliente()
    {
        return $this->belongsto(Cliente::class,'id_cli');
    }
}
