<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abogado extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';  // Especifica que la clave primaria de este modelo es 'id'
    protected $fillable =  
        ['nombre_abo', 'id_emp'];  // Permite la asignación masiva de los campos 'nombre' y 'empresa_id'

    // aquí definimos la relación entre Abogado y Empresa
    public function empresa()
    {
        return $this->belongsTo(Empresa::class,'id_emp');  // aquí voy a declarar que un abogado pertenece a una empresa
    }
    //aquí voy a definir la relación entre Abogado y ayudante en una relación de uno a muchos
    public function ayudante()
    {
        return $this->hasMany(Ayudante::class,'id_abog');
    }
    //aquí voy a relacionar el abogado y los clientes, en una relación de uno a muchos
    public function cliente()
    {
        return $this->hasMany(Cliente::class, 'id_aboga');
    }
}
