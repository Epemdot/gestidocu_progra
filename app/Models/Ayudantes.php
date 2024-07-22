<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ayudantes extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';  // Especifica que la clave primaria es 'id'
    protected $fillable = ['nombre_ayu', 'id_abog'];  // Permite la asignación masiva de estos campos

    // Define la relación con el modelo 'Abogado'
    public function abogados()
    //defino que un ayudante debe estar asociado a un abogado particular
    {
        return $this->belongsTo(Abogados::class, 'id_abog');
    }
    public function clientes()
    //defino que muchos clientes, pueden estar asociados a un ayudante
    {
        return $this->hasMany(Clientes::class, 'id_ayu');
    }
}
