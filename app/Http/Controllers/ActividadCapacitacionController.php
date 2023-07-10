<?php

namespace App\Http\Controllers;

use App\Models\ActividadCapacitacion;
use Illuminate\Http\Request;
use App\Models\Responsable;

class ActividadCapacitacionController extends Controller
{
    public function create()
    {
        $responsables = Responsable::pluck('nombre', 'id');
        
        $responsables = Responsable::pluck('nombre', 'id');
        
        return view('Actividad.create', compact('responsables'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'responsable_id' => 'required',
            'nombre_responsable' => 'required',
            'nombre_establecimiento' => 'required',
            'nombre_actividad' => 'required',
            'descripcion_actividad' => 'required',
            'tipo_capacitacion' => 'required',
            'descripcion_capacitacion' => 'required',
        ]);

        $actividad = new ActividadCapacitacion();
        $actividad->responsable_id = $request->input('responsable_id');

        // Crear un nuevo establecimiento en la base de datos
        $actibidadCapacitacion = new ActividadCapacitacion();
        $actibidadCapacitacion->nombre_responsable = $request->nombre_responsable;
        $actibidadCapacitacion->nombre_establecimiento = $request->nombre_establecimiento;
        $actibidadCapacitacion->nombre_actividad = $request->nombre_actividad;
        $actibidadCapacitacion->descripcion_actividad = $request->descripcion_actividad;
        $actibidadCapacitacion->tipo_capacitacion = $request->tipo_capacitacion;
        $actibidadCapacitacion->descripcion_capacitacion = $request->descricion_capacitacion;        
        $actibidadCapacitacion->save();

        // Redireccionar a una página de éxito o a la vista de detalles del establecimiento
        return redirect()->route('actividad.show', $actibidadCapacitacion->id);
    }

    public function show($id)
    {
        $actividad = ActividadCapacitacion::findOrFail($id);

        return view('Actividad.show', compact('actividad'));
    }
}

