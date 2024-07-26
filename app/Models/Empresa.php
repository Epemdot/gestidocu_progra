<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';  // Especifica que la clave primaria de este modelo es 'id'
    protected $fillable = ['nombre_emp'];  // Permite la asignación masiva del campo 'nombre_emp'

    // Aquí defino la relación entre Empresa y Abogados
    public function abogados()
    {
        return $this->hasMany(Abogado::class, 'id_emp');  // Una empresa puede tener muchos abogados
    }
    //aquí defino la relación entre Empresa y clientes
    public function clientes()
    {
        return $this->hasMany(Cliente::class, 'id_empr'); //una empresa puede tener muchos clientes, sin que implique que depende del abogado o el ayudante o que en su caso, al eliminar un ayudante o abogado se pierda el cliente y su documentación.
    }
}
