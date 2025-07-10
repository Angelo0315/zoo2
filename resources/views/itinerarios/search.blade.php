<x-app-layout>
    <div class="container py-4">

        {{-- 🔘 Botones superiores --}}
        <div class="d-flex flex-wrap justify-content-center gap-3 mb-4">
            <a href="{{ route('itinerarios.create') }}" class="btn btn-outline-success fw-bold">➕ Nuevo</a>
            <a href="{{ route('itinerarios.index') }}" class="btn btn-outline-primary fw-bold">📋 Ver Lista</a>
            <a href="{{ route('itinerarios.search') }}" class="btn btn-outline-info fw-bold">🔍 Buscar</a>
        </div>

        {{-- 🔍 Formulario de búsqueda --}}
        <form action="{{ route('itinerarios.search') }}" method="get">
            <div class="input-group mb-4">
                <button class="btn btn-outline-secondary" type="submit">Buscar por</button>
                <input id="filtro" name="filtro" type="text" class="form-control" placeholder="Escribe el valor" required>
                <select class="form-select" id="campo" name="campo" required>
                    <option value="guia">Guía</option>
                    <option value="fecha">Fecha</option>
                    <option value="duracion">Duración</option>
                    <option value="longitud">Longitud</option>
                    <option value="cantidad_personas">Personas</option>
                    <option value="cantidad_especies">Especies</option>
                </select>
            </div>
        </form>

        {{-- 📋 Tabla de resultados --}}
        @if(isset($itinerarios) && $itinerarios->isNotEmpty())
            <table class="table table-striped table-bordered align-middle">
                <thead class="encabezado-verde">
                    <tr>
                        <th>ID</th>
                        <th>Guía</th>
                        <th>Fecha</th>
                        <th>Duración</th>
                        <th>Longitud</th>
                        <th>Personas</th>
                        <th>Especies</th>
                        <th>Horario</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($itinerarios as $index => $itinerario)
                        <tr>
                            <th scope="row">{{ $index + 1 }}</th>
                            <td>
                                <strong>
                                {{ $itinerario->guia->empleado->nombre }} 
                                {{ $itinerario->guia->empleado->apellido_p }} 
                                {{ $itinerario->guia->empleado->apellido_m }}
                            </strong>
                                <br>
                                {{ $itinerario->guia->empleado->telefono }}
                                <br>
                                {{ ucfirst($itinerario->guia->empleado->tipo_empleado) }}
                            </td>
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
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @elseif(request()->has('campo'))
            <div class="alert alert-warning text-center mt-4">
                No se encontraron itinerarios con ese filtro.
            </div>
        @endif

    </div>
</x-app-layout>