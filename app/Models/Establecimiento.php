<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Establecimiento extends Model
{
    protected $fillable = ['nombre', 'direccion', 'horario_atencion', 'tipo_negocio', 'servicios_ofrecidos'];

    public function responsable()
    {
        return $this->belongsTo(Responsable::class);
    }

}
