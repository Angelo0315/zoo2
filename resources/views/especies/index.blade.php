<x-app-layout>
    <div class="container py-4">

        {{-- 🔘 Navegación --}}
        <div class="d-flex flex-wrap justify-content-center gap-3 mb-4">
            <a href="{{ route('especies.create') }}" class="btn btn-outline-success fw-bold">➕ Nuevo</a>
            <a href="{{ route('especies.index') }}" class="btn btn-outline-primary fw-bold">📋 Ver Lista</a>
            <a href="{{ route('especies.search') }}" class="btn btn-outline-info fw-bold">🔍 Buscar</a>
        </div>

        {{-- 📋 Tabla de especies --}}
        @if($especies->isNotEmpty())
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="encabezado-verde">
                        <tr>
                            <th>ID</th>
                            <th>Cuidador</th>
                            <th>Nombre de la especie</th>
                            <th>Nombre Científico</th>
                            <th>Descripción</th>
                            <th>Horario del Cuidador</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($especies as $index => $especie)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>
                                    {{ $especie->cuidador->empleado->nombre }}
                                    {{ $especie->cuidador->empleado->apellido_p }}
                                    {{ $especie->cuidador->empleado->apellido_m }}
                                </td>
                                <td>{{ $especie->nombre }}</td>
                                <td>{{ $especie->nombre_cientifico }}</td>
                                <td>{{ $especie->descripcion }}</td>
                                <td>
                                    @if($especie->horario_cuidador)
                                        {{ $especie->horario_cuidador->hora_entrada }} - {{ $especie->horario_cuidador->hora_salida }}
                                    @else
                                        <em class="text-muted">Sin horario</em>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('especies.edit', $especie) }}" class="btn btn-outline-primary btn-sm">Editar</a>
                                </td>
                                <td>
                                    <form action="{{ route('especies.destroy', $especie) }}" method="POST" onsubmit="return confirm('¿Eliminar este itinerario?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-sm">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="alert alert-warning text-center">No hay especies registrados.</div>
        @endif
    </div>
</x-app-layout>