<br>
<h1 class="text-center text-white mb-4"><strong>Administar Cuidadores</strong></h1>
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




