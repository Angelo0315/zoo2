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
    <div class="container">
        <form action="{{ route('zonas.search') }}" method="get">
            <div class="input-group mb-3">
                <button class="btn btn-outline-secondary" type="submit">Buscar por</button>
                <input id="filtro" name="filtro" type="text" class="form-control" placeholder="Escribe el valor" required>
                <select class="form-select" id="campo" name="campo" required>
                    <option value="itinerario">Itinerario</option>
                    <option value="nombre">Nombre</option>
                    <option value="extension">Extensión</option>
                </select>
                </select>

            </div>
        </form>


        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Itinerario</th>
                    <th scope="col">Nombre de la Zona</th>
                    <th scope="col">Extensión</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($zonas as $zona)
                    <tr>
                        <th scope="row">1</th>
                        <td>

                        {{ $zona->itinerario->fecha }}
                        {{ $zona->itinerario->duracion }} min
                        {{ $zona->itinerario->longitud }} km
                        {{ $zona->itinerario->cantidad_especies }}
                        {{ $zona->itinerario->cantidad_personas }}

                        </td>

                        <td>{{ $zona->nombre }}</td>
                        <td>{{ $zona->extension }}km</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</x-app-layout>