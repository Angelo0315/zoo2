<x-app-layout>
    <div class="container py-4">

        {{-- 🔘 Botones superiores --}}
        <div class="d-flex flex-wrap justify-content-center gap-3 mb-4">
            <a href="{{ route('especies.create') }}" class="btn btn-outline-success fw-bold">➕ Nuevo</a>
            <a href="{{ route('especies.index') }}" class="btn btn-outline-primary fw-bold">📋 Ver Lista</a>
            <a href="{{ route('especies.search') }}" class="btn btn-outline-info fw-bold">🔍 Buscar</a>
        </div>

        {{-- 🔍 Formulario de búsqueda --}}
        <form action="{{ route('especies.search') }}" method="get">
            <div class="input-group mb-4">
                <button class="btn btn-outline-secondary" type="submit">Buscar por</button>
                <input id="filtro" name="filtro" type="text" class="form-control" placeholder="Escribe el valor" required>
                <select class="form-select" id="campo" name="campo" required>
                    <option value="cuidador">Cuidador</option>
                    <option value="nombre">Nombre de la Especie</option>
                    <option value="nombre_cientifico">Nombre científico</option>
                    <option value="descripcion">Descripción</option>
                </select>
            </div>
        </form>

        {{-- 📋 Tabla de resultados --}}
        @if(isset($especies) && $especies->isNotEmpty())
            <table class="table table-striped table-bordered align-middle">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Cuidador</th>
                        <th>Nombre de la Especie</th>
                        <th>Nombre Científico</th>
                        <th>Descripción</th>
                        <th>Horario del Cuidador</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($especies as $index => $especie)
                        <tr>
                            <th scope="row">{{ $index + 1 }}</th>
                            <td>
                                <strong>
                                {{ $especie->cuidador->empleado->nombre }} 
                                {{ $especie->cuidador->empleado->apellido_p }} 
                                {{ $especie->cuidador->empleado->apellido_m }}
                            </strong>
                            </td>
                            <td>{{ $especie->nombre }}</td>
                            <td>{{ $especie->nombre_cientifico }} min</td>
                            <td>{{ $especie->descripcion }} km</td>
                            <td>
                                @if($especie->horario_cuidador)
                                    {{ $especie->horario_cuidador->hora_entrada }} - {{ $especie->horario_cuidador->hora_salida }}
                                @else
                                    <em class="text-muted">Sin horario</em>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @elseif(request()->has('campo'))
            <div class="alert alert-warning text-center mt-4">
                No se encontraron especies con ese filtro.
            </div>
        @endif

    </div>
</x-app-layout>