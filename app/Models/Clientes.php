<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;

    protected $fillable = ['nombre_cli', 'id_empr', 'id_aboga', 'id_ayu'];//asignación de forma masiva para estos campos

    public function empresa()
    //defino la relación de cada cliente, con la empresa de uno(empresa) a muchos(clientes)
    {
        return $this->belongsTo(Empresas::class, 'id_empr');
    }
    //defino la relación de cada cliente, con el abogado de uno(abogado) a muchos(clientes)
    public function abogado()
    {
        return $this->belongsTo(Abogados::class, 'id_aboga');
    }
    //defino la relación de cada cliente, con el ayudante de uno(ayudante) a muchos(clientes)
    public function ayudante()
    {
        return $this->belongsTo(Ayudantes::class, 'id_ayu');
    }
    //defino la relación de cada cliente, con sus procesos de uno(cliente) a muchos(procesos)
    public function procesos()
    {
        return $this->hasMany(Procesos::class, 'id_cli');
    }
}
