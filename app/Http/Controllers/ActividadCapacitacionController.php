<?php

namespace App\Http\Controllers;

use App\Models\ActividadCapacitacion;
use Illuminate\Http\Request;
use App\Models\Responsable;
use App\Models\Establecimiento;

class ActividadCapacitacionController extends Controller
{
    public function create()
    {
        $responsables = Responsable::all();
        $establecimientos = Establecimiento::whereNull('responsable_id')->get();

        return view('Actividad.create', compact('responsables', 'establecimientos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'responsable_id' => 'required',
            'establecimiento_id' => 'required',
            'nombre_actividad' => 'required',
            'descripcion_actividad' => 'required',
            'tipo_capacitacion' => 'required',
            'descripcion_capacitacion' => 'required',
        ]);

        $responsable = Responsable::findOrFail($request->input('responsable_id'));
        $establecimiento = Establecimiento::findOrFail($request->input('establecimiento_id'));

        $actividad = new ActividadCapacitacion();
        $actividad->establecimiento_id = $establecimiento->id;
        $actividad->nombre_establecimiento = $establecimiento->nombre;
        $actividad->responsable_id = $responsable->id;
        $actividad->nombre_responsable = $responsable->nombre;
        $actividad->nombre_actividad = $request->input('nombre_actividad');
        $actividad->descripcion_actividad = $request->input('descripcion_actividad');
        $actividad->tipo_capacitacion = $request->input('tipo_capacitacion');
        $actividad->descripcion_capacitacion = $request->input('descripcion_capacitacion');
        $actividad->save();

        return redirect()->route('actividad.show', $actividad->id);
    }

    public function show($id)
    {
        $actividad = ActividadCapacitacion::findOrFail($id);

        return view('Actividad.show', compact('actividad'));
    }
}