<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abogados extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';  // Especifica que la clave primaria de este modelo es 'id'
    protected $fillable =  
        ['nombre_abo', 'id_emp'];  // Permite la asignación masiva de los campos 'nombre' y 'empresa_id'

    // aquí definimos la relación entre Abogado y Empresa
    public function empresa()
    {
        return $this->belongsTo(Empresas::class,'id_emp');  // aquí voy a declarar que un abogado pertenece a una empresa
    }
    //aquí voy a definir la relación entre Abogado y ayudante en una relación de uno a muchos
    public function ayudantes()
    {
        return $this->hasMany(Ayudantes::class,'id_abog');
    }
    //aquí voy a relacionar el abogado y los clientes, en una relación de uno a muchos
    public function clientes()
    {
        return $this->hasMany(Clientes::class, 'id_aboga');
    }
}
