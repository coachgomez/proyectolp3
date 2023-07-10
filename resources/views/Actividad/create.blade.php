<!-- resources/views/Actividad/create.blade.php -->
<h1>Crear Actividad de Capacitación</h1>

<form action="{{ route('actividad.store') }}" method="POST">
    @csrf
    
<div class="form-group">
    <label for="responsable_id">Responsable:</label>
    <select id="responsable_id" name="responsable_id" class="form-control">
        <option value="">Seleccionar Responsable</option>
        @foreach ($responsables as $responsable)
            <option value="{{ $responsable->id }}">{{ $responsable->nombre }}</option>
        @endforeach
    </select>
</div>

    <div class="form-group">
        <label for="nombre_establecimiento">Nombre del Establecimiento:</label>
        <input type="text" id="nombre_establecimiento" name="nombre_establecimiento" class="form-control">
    </div>

    <div class="form-group">
        <label for="nombre_actividad">Nombre de la Actividad:</label>
        <input type="text" id="nombre_actividad" name="nombre_actividad" class="form-control">
    </div>

    <div class="form-group">
        <label for="descripcion_actividad">Descripción de la Actividad:</label>
        <textarea id="descripcion_actividad" name="descripcion_actividad" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <label for="tipo_capacitacion">Tipo de Capacitación:</label>
        <input type="text" id="tipo_capacitacion" name="tipo_capacitacion" class="form-control">
    </div>

    <div class="form-group">
        <label for="descripcion_capacitacion">Descripción de la Capacitación:</label>
        <textarea id="descripcion_capacitacion" name="descripcion_capacitacion" class="form-control"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
