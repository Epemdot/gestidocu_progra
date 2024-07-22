<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;

    protected $fillable = ['nombre_cli', 'id_empr', 'id_aboga', 'id_ayu'];

    public function empresa()
    {
        return $this->belongsTo(Empresas::class, 'id_empr');
    }

    public function abogado()
    {
        return $this->belongsTo(Abogados::class, 'id_aboga');
    }

    public function ayudante()
    {
        return $this->belongsTo(Ayudantes::class, 'id_ayu');
    }

    public function procesos()
    {
        return $this->hasMany(Procesos::class, 'id_cli');
    }
}
