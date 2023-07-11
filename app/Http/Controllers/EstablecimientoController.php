<?php

namespace App\Http\Controllers;

use App\Models\Establecimiento;
use Illuminate\Http\Request;

class EstablecimientoController extends Controller
{
    public function create()
    {
        return view('establecimientos.create');
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required',
            'direccion' => 'required',
            'horario_atencion' => 'required',
            'tipo_negocio' => 'required',
            'servicios_ofrecidos' => 'required',
        ]);

        // Crear un nuevo establecimiento en la base de datos
        $establecimiento = new Establecimiento();
        $establecimiento->nombre = $request->nombre;
        $establecimiento->direccion = $request->direccion;
        $establecimiento->horario_atencion = $request->horario_atencion;
        $establecimiento->tipo_negocio = $request->tipo_negocio;
        $establecimiento->servicios_ofrecidos = $request->servicios_ofrecidos;
        $establecimiento->save();

        // Redireccionar a una página de éxito o a la vista de detalles del establecimiento
        return redirect()->route('establecimientos.show', $establecimiento->id);
    }

    public function show($id)
    {
        $establecimiento = Establecimiento::findOrFail($id);
        return view('establecimientos.show', compact('establecimiento'));
    }
}
