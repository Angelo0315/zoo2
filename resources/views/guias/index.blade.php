<x-app-layout>
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
    <br>
    <div class="major container">
        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle text-center">
                <thead class ="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Guía</th>
                        <th>Fecha de Ingreso</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($guias as $index =>$guia)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $guia->empleado->nombre }}
                                {{ $guia->empleado->apellido_p }}
                                {{ $guia->empleado->apellido_m }}
                                {{ $guia->empleado->telefono }}
                                {{ $guia->empleado->tipo_empleado }}
                            </td>
                            <td>{{ $guia->fecha_ingreso }}</td>
                            <td>
                                <a href="{{ route('guias.edit', $guia) }}"
                                class="btn btn-outline-primary">Editar</a>
                            </td>
                            <td>

                                <form action="{{ route('guias.destroy', $guia) }}" method="post">
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
        <a href="{{ route('guias.create') }}" class="btn btn-secondary">Registrar Guías</a>
    </div>
</x-app-layout>