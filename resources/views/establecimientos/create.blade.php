<!-- resources/views/establecimientos/create.blade.php -->
<form action="{{ route('establecimientos.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" class="form-control">
    </div>
    <div class="form-group">
        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" class="form-control">
    </div>
    <div class="form-group">
        <label for="horario_atencion">Horario de Atención:</label>
        <input type="text" id="horario_atencion" name="horario_atencion" class="form-control">
    </div>
    <div class="form-group">
        <label for="tipo_negocio">Tipo de Negocio:</label>
        <input type="text" id="tipo_negocio" name="tipo_negocio" class="form-control">
    </div>
    <div class="form-group">
        <label for="servicios_ofrecidos">Servicios Ofrecidos:</label>
        <textarea id="servicios_ofrecidos" name="servicios_ofrecidos" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Registrar</button>
</form>
