<!-- resources/views/responsables/show.blade.php -->
<h1>Detalles del Responsable</h1>

<p><strong>Nombre:</strong> {{ $responsable->nombre }}</p>
<p><strong>DNI:</strong> {{ $responsable->dni }}</p>
<p><strong>Email:</strong> {{ $responsable->email }}</p>
<p><strong>Teléfono:</strong> {{ $responsable->telefono }}</p>
<p><strong>Fecha de creación:</strong> {{ $responsable->created_at }}</p>
<p><strong>Fecha de actualización:</strong> {{ $responsable->updated_at }}</p>

<a href="{{ route('responsables.create') }}">Registrar otro Responsable</a>
