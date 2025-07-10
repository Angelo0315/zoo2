<div class="form-floating mb-3" >

    
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
</div>
<div class="form-floating mb-3">
    <input type="date" class="form-control" id="fecha_ingreso" name="fecha_ingreso" value="{{ old('fecha_ingreso', $guias->fecha_ingreso ?? '') }}" required>
    <label for="fecha_ingreso">Fecha de Ingreso</label>
</div>




