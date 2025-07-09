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
    <div class="major container">
        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle text-center">
                <thead class ="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Teléfono</th>
                        <th>Dirección</th>
                        <th>Fecha de Ingreso</th>
                        <th>Tipo de Empleado</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($empleados as $index =>$empleado)
                        <tr>
                            <td>{{ $index + 1 }}</td>

                            <td>{{ $empleado->nombre }}</td>
                            <td>{{ $empleado->apellido_p }}</td>
                            <td>{{ $empleado->apellido_m }}</td>
                            <td>{{ $empleado->telefono }}</td>
                            <td>{{ $empleado->direccion }}</td>
                            <td>{{ $empleado->fecha_ingreso }}</td>
                            <td>{{ $empleado->tipo_empleado }}</td>
                            <td>
                                <a href="{{ route('empleados.edit', $empleado) }}"
                                class="btn btn-outline-primary">Editar</a>
                            </td>
                            <td>

                                <form action="{{ route('empleados.destroy', $empleado) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <a href="{{ route('empleados.create') }}" class="btn btn-secondary">Registrar Empleados</a>
    </div>
</x-app-layout>