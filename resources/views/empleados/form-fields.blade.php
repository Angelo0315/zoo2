         
<div class="form-floating mb-3">
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre"  value="{{old('nombre',$empleado->nombre)}}" required>
    <label for="nombre">Nombre</label>
</div>

<div class="form-floating mb-3">
    <input type="text" class="form-control" id="apellido_p" name="apellido_p" placeholder="Apellido Paterno"  value="{{old('apellido_p',$empleado->apellido_p)}}" required>
    <label for="apellido_p">Apellido Paterno</label>
</div>

<div class="form-floating mb-3">
    <input type="text" class="form-control" id="apellido_m" name="apellido_m" placeholder="Apellido Materno"  value="{{old('apellido_m',$empleado->apellido_m)}}" required>
    <label for="apellido_m">Apellido Materno</label>
</div>

<div class="form-floating mb-3">
    <input type="text" class="form-control" id="telefono" name="telefono" placeholder=" " value="{{ old('telefono', $empleado->telefono ?? '') }}" required maxlength="10">
    <label for="telefono">Teléfono</label>
</div>

<div class="form-floating mb-3">
    <input type="text" class="form-control" id="direccion" name="direccion" placeholder=" " value="{{ old('direccion', $empleado->direccion ?? '') }}" required maxlength="255">
    <label for="direccion">Dirección</label>
</div>

<div class="form-floating mb-3">
    <input type="date" class="form-control" id="fecha_ingreso" name="fecha_ingreso" value="{{ old('fecha_ingreso', $empleado->fecha_ingreso ?? '') }}" required>
    <label for="fecha_ingreso">Fecha de Ingreso</label>
</div>

<div class="form-floating mb-3">
    <select class="form-select" id="tipo_empleado" name="tipo_empleado" required>
        <option value="" disabled {{ old('tipo_empleado', $empleado->tipo_empleado ?? '') ? '' : 'selected' }}>Selecciona tipo</option>
        <option value="guia" {{ old('tipo_empleado', $empleado->tipo_empleado ?? '') === 'guia' ? 'selected' : '' }}>Guía</option>
        <option value="cuidador" {{ old('tipo_empleado', $empleado->tipo_empleado ?? '') === 'cuidador' ? 'selected' : '' }}>Cuidador</option>
    </select>
    <label for="tipo_empleado">Tipo de Empleado</label>
</div>



