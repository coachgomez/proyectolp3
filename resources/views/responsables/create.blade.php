<!-- resources/views/responsables/create.blade.php -->
<h1>Registro de los responsables</h1>

<form action="{{ route('responsables.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" class="form-control">
    </div>
    <div class="form-group">
        <label for="dni">DNI:</label>
        <input type="text" id="dni" name="dni" class="form-control">
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" class="form-control">
    </div>
    <div class="form-group">
        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Registrar</button>
</form>
