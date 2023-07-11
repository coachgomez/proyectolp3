<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Establecimiento extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'direccion', 'horario_atencion', 'tipo_negocio', 'servicios_ofrecidos'];

    public function responsable()
    {
        return $this->belongsTo(Responsable::class);
    }

}
