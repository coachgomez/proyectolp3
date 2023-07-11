<!-- resources/views/establecimientos/show.blade.php -->
<h1>Detalles del Establecimiento</h1>
<p>Nombre: {{ $establecimiento->nombre }}</p>
<p>Dirección: {{ $establecimiento->direccion }}</p>
<p>Horario de Atención: {{ $establecimiento->horario_atencion }}</p>
<p>Tipo de Negocio: {{ $establecimiento}}->tipo

<a href="{{ route('establecimientos.create') }}">Registrar otro Establecimiento</a>
