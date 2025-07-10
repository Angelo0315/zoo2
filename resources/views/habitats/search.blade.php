<x-app-layout>
    <div class="d-flex flex-wrap justify-content-center gap-3 mb-4">
            <a href="{{ route('habitats.create') }}" class="btn btn-outline-success fw-bold">
                ➕ Nuevo
            </a>
            <a href="{{ route('habitats.index') }}" class="btn btn-outline-primary fw-bold">
                📋 Ver Lista
            </a>
            <a href="{{ route('habitats.search') }}" class="btn btn-outline-info fw-bold">
                🔍 Buscar
            </a>
        </div>
    <br>
    <div class="container">
        <form action="{{ route('habitats.search') }}" method="get">
            <div class="input-group mb-3">
                <button class="btn btn-outline-secondary" type="submit">Buscar por</button>
                <input id="filtro" name="filtro" type="text" class="form-control" placeholder="Escribe el valor" required>
                <select class="form-select" id="campo" name="campo" required>
                    <option value="especie">Especie</option>
                    <option value="clima">Clima</option>
                    <option value="vegetacion">Vegetación</option>
                    <option value="continente">Continente</option>
                </select>
                </select>

            </div>
        </form>


        <table class="table">
            <thead class="encabezado-verde">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Especie</th>
                    <th scope="col">Clima</th>
                    <th scope="col">Vegetación</th>
                    <th scope="col">Continente</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($habitats as $habitat)
                    <tr>
                        <th scope="row">1</th>
                        <td>

                        {{ $habitat->especie->nombre }}
                        {{ $habitat->especie->nombre_cientifico }}
                        {{ $habitat->especie->descripcion }}
                        </td>

                        <td>{{ $habitat->clima }}</td>
                        <td>{{ $habitat->vegetacion }}</td>
                        <td>{{ $habitat->continente }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</x-app-layout>