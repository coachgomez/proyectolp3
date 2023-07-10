<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActividadCapacitacion extends Model
{
    protected $table = 'actividades_capacitacion';
    protected $fillable = ['nombre_responsable','nombre_establecimiento','nombre_actividad','descripcion_actividad','tipo_capacitacion','descripcion_capacitacion'];

    // Relación con el modelo Establecimiento
    public function establecimiento()
    {
        return $this->belongsTo(Establecimiento::class, 'establecimiento_id');
    }
}
