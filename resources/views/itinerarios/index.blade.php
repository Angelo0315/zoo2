<x-app-layout>
    <div class="container py-4">

        {{-- 🔘 Navegación --}}
        <div class="d-flex flex-wrap justify-content-center gap-3 mb-4">
            <a href="{{ route('itinerarios.create') }}" class="btn btn-outline-success fw-bold">➕ Nuevo</a>
            <a href="{{ route('itinerarios.index') }}" class="btn btn-outline-primary fw-bold">📋 Ver Lista</a>
            <a href="{{ route('itinerarios.search') }}" class="btn btn-outline-info fw-bold">🔍 Buscar</a>
        </div>

        {{-- 📋 Tabla de itinerarios --}}
        @if($itinerarios->isNotEmpty())
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="encabezado-verde">
                        <tr>
                            <th>ID</th>
                            <th>Guía</th>
                            <th>Teléfono</th>
                            <th>Fecha</th>
                            <th>Duración</th>
                            <th>Longitud</th>
                            <th>Personas</th>
                            <th>Especies</th>
                            <th>Horario de las Actividades</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($itinerarios as $index => $itinerario)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>
                                    {{ $itinerario->guia->empleado->nombre }}
                                    {{ $itinerario->guia->empleado->apellido_p }}
                                    {{ $itinerario->guia->empleado->apellido_m }}
                                </td>
                                <td>{{ $itinerario->guia->empleado->telefono }}</td>
                                <td>{{ $itinerario->fecha }}</td>
                                <td>{{ $itinerario->duracion }} min</td>
                                <td>{{ $itinerario->longitud }} km</td>
                                <td>{{ $itinerario->cantidad_personas }}</td>
                                <td>{{ $itinerario->cantidad_especies }}</td>
                                <td>
                                    @if($itinerario->horario_guia)
                                        {{ $itinerario->horario_guia->hora_entrada }} - {{ $itinerario->horario_guia->hora_salida }}
                                    @else
                                        <em class="text-muted">Sin horario</em>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('itinerarios.edit', $itinerario) }}" class="btn btn-outline-primary btn-sm">Editar</a>
                                </td>
                                <td>
                                    <form action="{{ route('itinerarios.destroy', $itinerario) }}" method="POST" onsubmit="return confirm('¿Eliminar este itinerario?')">
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
            <div class="alert alert-warning text-center">No hay itinerarios registrados.</div>
        @endif
    </div>
</x-app-layout>