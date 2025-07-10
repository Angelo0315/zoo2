<x-app-layout>
    {{-- Navegación --}}
    <div class="d-flex flex-wrap justify-content-center gap-3 mb-4">
        <a href="{{ route('recorridos.create') }}" class="btn btn-outline-success fw-bold">➕ Nuevo</a>
        <a href="{{ route('recorridos.index') }}" class="btn btn-outline-primary fw-bold">📋 Ver Lista</a>
        <a href="{{ route('recorridos.search') }}" class="btn btn-outline-info fw-bold">🔍 Buscar</a>
    </div>

    <br>

    <div class="major container">
        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle text-center">
                <thead class="encabezado-verde">
                    <tr>
                        <th>ID</th>
                        <th>Zona</th>
                        <th>Hábitat</th>
                        <th>Especie</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($recorridos as $index => $recorrido)
                        <tr>
                            <td>{{ $index + 1 }}</td>

                            {{-- Zona --}}
                            <td>
                                {{ $recorrido->zona->nombre ?? '—' }}<br>
                                Extensión: {{ $recorrido->zona->extension ?? '—' }} km
                            </td>

                            {{-- Hábitat --}}
                            <td>
                                Clima: {{ $recorrido->habitat->clima ?? '—' }}<br>
                                Vegetación: {{ $recorrido->habitat->vegetacion ?? '—' }}<br>
                                Continente: {{ $recorrido->habitat->continente ?? '—' }}
                            </td>

                            {{-- Especie --}}
                            <td>
                                {{ $recorrido->especie->nombre ?? '—' }}<br>
                                {{ $recorrido->especie->nombre_cientifico ?? '' }}<br>
                                <small>{{ $recorrido->especie->descripcion ?? '' }}</small>
                            </td>

                            <td>
                                <a href="{{ route('recorridos.edit', $recorrido) }}" class="btn btn-outline-primary">
                                    Editar
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('recorridos.destroy', $recorrido) }}" method="post">
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

        {{-- Acción extra --}}
        <a href="{{ route('recorridos.create') }}" class="btn btn-secondary mt-3">
            Registrar Recorrido
        </a>
    </div>
</x-app-layout>