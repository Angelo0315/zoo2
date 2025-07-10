<x-app-layout>
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
    <br>
    <div class="major container">
        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle text-center">
                <thead class="encabezado-verde">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Fecha de ingreso</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cuidadors as $index => $cuidador)
                        <tr>
                            <td>{{ $index + 1 }}</td>

                            <td>{{ $cuidador->empleado->nombre }}
                                {{ $cuidador->empleado->apellido_p }}
                                {{ $cuidador->empleado->apellido_m }}
                                {{ $cuidador->empleado->telefono }}
                                {{ $cuidador->empleado->direccion }}
                            </td>
                            <td>{{ $cuidador->fecha_ingreso }}</td>
                            <td>
                                <a href="{{ route('cuidadors.edit', $cuidador) }}"
                                class="btn btn-outline-primary">Editar</a>
                            </td>
                            <td>

                                <form action="{{ route('cuidadors.destroy', $cuidador) }}" method="post">
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
        <a href="{{ route('cuidadors.create') }}" class="btn btn-secondary">Registrar Cuidadores</a>
    </div>
</x-app-layout>