<x-app-layout>
    {{-- Navegación --}}
    <div class="d-flex flex-wrap justify-content-center gap-3 mb-4">
        <a href="{{ route('recorridos.create') }}" class="btn btn-outline-success fw-bold">➕ Nuevo</a>
        <a href="{{ route('recorridos.index') }}" class="btn btn-outline-primary fw-bold">📋 Ver Lista</a>
        <a href="{{ route('recorridos.search') }}" class="btn btn-outline-info fw-bold">🔍 Buscar</a>
    </div>

    <br>

    <div class="container">
        {{-- Formulario de búsqueda --}}
        <form action="{{ route('recorridos.search') }}" method="get">
            <div class="input-group mb-3">
                <button class="btn btn-outline-secondary" type="submit">Buscar por</button>
                <input id="filtro" name="filtro" type="text" class="form-control" placeholder="Escribe el valor" required>
                <select class="form-select" id="campo" name="campo" required>
                    <option value="especie">Especie</option>
                    <option value="habitat">Hábitat</option>
                    <option value="zona">Zona</option>
                </select>
            </div>
        </form>

        {{-- Resultados --}}
        <table class="table table-bordered text-center align-middle mt-4">
            <thead class="encabezado-verde">
                <tr>
                    <th>ID</th>
                    <th>Especie</th>
                    <th>Hábitat</th>
                    <th>Zona</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($recorridos as $index => $recorrido)
                    <tr>
                        <td>{{ $index + 1 }}</td>

                        {{-- Especie --}}
                        <td>
                            {{ $recorrido->especie->nombre ?? '—' }}<br>
                            <em>{{ $recorrido->especie->nombre_cientifico ?? '' }}</em><br>
                            <small>{{ $recorrido->especie->descripcion ?? '' }}</small>
                        </td>

                        {{-- Hábitat --}}
                        <td>
                            Clima: {{ $recorrido->habitat->clima ?? '—' }}<br>
                            Vegetación: {{ $recorrido->habitat->vegetacion ?? '—' }}<br>
                            Continente: {{ $recorrido->habitat->continente ?? '—' }}
                        </td>

                        {{-- Zona --}}
                        <td>
                            {{ $recorrido->zona->nombre ?? '—' }}<br>
                            Extensión: {{ $recorrido->zona->extension ?? '—' }} km
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">No se encontraron recorridos con ese filtro.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-app-layout>