<x-app-layout>
    <div class="d-flex flex-wrap justify-content-center gap-3 mb-4">
            <a href="{{ route('zonas.create') }}" class="btn btn-outline-success fw-bold">
                ➕ Nuevo
            </a>
            <a href="{{ route('zonas.index') }}" class="btn btn-outline-primary fw-bold">
                📋 Ver Lista
            </a>
            <a href="{{ route('zonas.search') }}" class="btn btn-outline-info fw-bold">
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
                        <th>Itinerario</th>
                        <th>Nombre de la Zona</th>
                        <th>Extensión</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($zonas as $index =>$zona)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $zona->itinerario->fecha }}
                                {{ $zona->itinerario->duracion}} min
                                {{ $zona->itinerario->longitud}} km
                                {{ $zona->itinerario->cantidad_personas }}
                                {{ $zona->itinerario->cantidad_personas }}
                            </td>
                            <td>{{ $zona->nombre }}</td>
                            <td>{{ $zona->extension }} km</td>
                            <td>
                                <a href="{{ route('zonas.edit', $zona) }}"
                                class="btn btn-outline-primary">Editar</a>
                            </td>
                            <td>

                                <form action="{{ route('zonas.destroy', $zona) }}" method="post">
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
        <a href="{{ route('zonas.create') }}" class="btn btn-secondary">Registrar Zonas</a>
    </div>
</x-app-layout>