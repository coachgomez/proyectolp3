<!-- resources/views/Actividad/show.blade.php -->
<h1>Detalles de la Actividad de Capacitación</h1>

<div>
    <h3>Nombre del Responsable: {{ $actividad->nombre_responsable }}</h3>
    <h3>Nombre del Establecimiento: {{ $actividad->nombre_establecimiento }}</h3>
    <h3>Nombre de la Actividad: {{ $actividad->nombre_actividad }}</h3>
    <p>Descripción de la Actividad: {{ $actividad->descripcion_actividad }}</p>
    <h3>Tipo de Capacitación: {{ $actividad->tipo_capacitacion }}</h3>
    <p>Descripción de la Capacitación: {{ $actividad->descripcion_capacitacion }}</p>
    <p>Fecha de Creación: {{ $actividad->created_at }}</p>
    <p>Última Actualización: {{ $actividad->updated_at }}</p>
</div>
