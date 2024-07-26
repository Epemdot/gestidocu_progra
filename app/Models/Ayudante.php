<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ayudante extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';  // Especifica que la clave primaria es 'id'
    protected $fillable = ['nombre_ayu', 'id_abog'];  // Permite la asignación masiva de estos campos

    // Define la relación con el modelo 'Abogado'
    public function abogado()
    //defino que un ayudante debe estar asociado a un abogado particular
    {
        return $this->belongsTo(Abogado::class, 'id_abog');
    }
    public function clientes()
    //defino que muchos clientes, pueden estar asociados a un ayudante
    {
        return $this->hasMany(Cliente::class, 'id_ayu');
    }
}
