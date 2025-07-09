<x-app-layout>
     <div class="d-flex flex-wrap justify-content-center gap-3 mb-4">
            <a href="{{ route('empleados.create') }}" class="btn btn-outline-success fw-bold">
                ➕ Nuevo
            </a>
            <a href="{{ route('empleados.index') }}" class="btn btn-outline-primary fw-bold">
                📋 Ver Lista
            </a>
            <a href="{{ route('empleados.search') }}" class="btn btn-outline-info fw-bold">
                🔍 Buscar
            </a>
        </div>
    <br>
    <div class="container">
        <form action="{{ route('empleados.search') }}" method="get">
            <div class="input-group mb-3">
                <button class="btn btn-outline-secondary" type="submit">Buscar por</button>
                <input id="nombre" name="nombre" type="text" class="form-control"
                    aria-label="Text input with segmented dropdown button" placeholder=" " required>
                <select class="form-select" id="busqueda" name="busqueda" required>
                    <option value="nombre">Nombre</option>
                    <option value="apellido_p">Apellido Paterno</option>
                    <option value="apellido_m">Apellido Materno</option>
                    <option value="telefono">Teléfono</option>
                    <option value="direccion">Dirección</option>
                    <option value="fecha_ingreso">Fecha ingreso</option>
                    <option value="tipo_empleado">Tipo Empleado</option>
                </select>

            </div>
        </form>


        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido Paterno</th>
                    <th scope="col">Apellido Materno</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Fecha ingreso</th>
                    <th scope="col">Tipo Empleado</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($empleados as $empleado)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $empleado->nombre }}</td>
                        <td>{{ $empleado->apellido_p }}</td>
                        <td>{{ $empleado->apellido_m }}</td>
                        <td>{{ $empleado->telefono }}</td>
                        <td>{{ $empleado->direccion }}</td>
                        <td>{{ $empleado->fecha_ingreso }}</td>
                        <td>{{ $empleado->tipo_empleado }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</x-app-layout>