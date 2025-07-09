<div class="d-flex flex-wrap justify-content-center gap-3 mb-4">
            <a href="{{ route('cuidadors.create') }}" class="btn btn-outline-success fw-bold">
                ➕ Nuevo
            </a>
            <a href="{{ route('cuidadors.index') }}" class="btn btn-outline-primary fw-bold">
                📋 Ver Lista
            </a>
            <a href="{{ route('cuidadors.search') }}" class="btn btn-outline-info fw-bold">
                🔍 Buscar
            </a>
        </div>

<div class="form-floating mb-3">
    <select class="form-select" name="id_empleado" id="id_empleado" required>
        <option value="">Selecciona un Empleado</option>
        @foreach($empleados as $empleado)
            <option value="{{ $empleado->id }}" {{ old('id_empleado', $cuidador->id_empleado ?? '') == $empleado->id ? 'selected' : '' }}>
                <br>- Nombre {{ $empleado->nombre }} 
                <br>- Paterno {{ $empleado->apellido_p }} 
                <br>- Materno {{ $empleado->apellido_m }} 
                <br>- Teléfono: {{ $empleado->telefono }}
                <br>- Dirección: {{ $empleado->direccion }}
            </option>
        @endforeach
    </select>
    <label for="id_empleado">Empleado</label>
</div>

<div class="form-floating mb-3">
    <input type="date" class="form-control" id="fecha_ingreso" name="fecha_ingreso" value="{{ old('fecha_ingreso', $cuidador->fecha_ingreso ?? '') }}" required>
    <label for="fecha_ingreso">Fecha de Ingreso</label>
</div>




