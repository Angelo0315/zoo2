<div class="form-floating mb-3">
    <div class="d-flex flex-wrap justify-content-center gap-3 mb-4">
            <a href="{{ route('guias.create') }}" class="btn btn-outline-success fw-bold">
                ➕ Nuevo
            </a>
            <a href="{{ route('guias.index') }}" class="btn btn-outline-primary fw-bold">
                📋 Ver Lista
            </a>
            <a href="{{ route('guias.search') }}" class="btn btn-outline-info fw-bold">
                🔍 Buscar
            </a>
        </div>
    <select class="form-select" name="id_empleado" id="id_empleado" required>
        <option value="">Selecciona un Empleado</option>
        @foreach($empleados as $empleado)
            <option value="{{ $empleado->id }}" {{ old('id_empleado', $guia->id_empleado ?? '') == $empleado->id ? 'selected' : '' }}>
                                {{ $empleado->nombre }} 
                                {{ $empleado->apellido_p }} 
                                {{ $empleado->apellido_m }} |
                                {{ $empleado->telefono }} |
                                {{ ucfirst($empleado->tipo_empleado) }}
            </option>

        @endforeach
    </select>
    <label for="id_empleado">Empleado</label>
</div>

<div class="form-floating mb-3">
    <input type="date" class="form-control" id="fecha_ingreso" name="fecha_ingreso" value="{{ old('fecha_ingreso', $guias->fecha_ingreso ?? '') }}" required>
    <label for="fecha_ingreso">Fecha de Ingreso</label>
</div>




