<?php

namespace App\Http\Controllers;

use App\Models\Responsable;
use Illuminate\Http\Request;

class ResponsableController extends Controller
{
    public function create()
    {
        return view('responsables.create');
    }
    
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required',
            'dni'=>'required',
            'email' => 'required|email',
            'telefono' => 'required',
        ]);
    
        // Crear un nuevo responsable en la base de datos
        $responsable = new Responsable();
        $responsable->nombre = $request->nombre;
        $responsable->dni = $request->dni;
        $responsable->email = $request->email;
        $responsable->telefono = $request->telefono;
        $responsable->save();
    
        // Redireccionar a una página de éxito o a la vista de detalles del responsable
        return redirect()->route('responsables.show', $responsable->id);
    }
    
    public function show($id)
    {
        $responsable = Responsable::findOrFail($id);
        return view('responsables.show', compact('responsable'));
    }
    
}
