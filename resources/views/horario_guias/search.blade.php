<x-app-layout>
    <div class="container py-4">

        {{-- 🔘 Botones superiores --}}
        <div class="d-flex flex-wrap justify-content-center gap-3 mb-4">
            <a href="{{ route('horario_guias.create') }}" class="btn btn-outline-success fw-bold">
                ➕ Nuevo
            </a>
            <a href="{{ route('horario_guias.index') }}" class="btn btn-outline-primary fw-bold">
                📋 Ver Lista
            </a>
            <a href="{{ route('horario_guias.search') }}" class="btn btn-outline-info fw-bold">
                🔍 Buscar
            </a>
        </div>

        {{-- 🔍 Formulario de búsqueda --}}
        <form action="{{ route('horario_guias.search') }}" method="get">
            <div class="input-group mb-4">
                <button class="btn btn-outline-secondary" type="submit">Buscar por</button>
                <input id="filtro" name="filtro" type="text" class="form-control" placeholder="Escribe el valor" required>
                <select class="form-select" id="campo" name="campo" required>
                    <option value="guia">Guía</option>
                    <option value="fecha">Fecha</option>
                    <option value="hora_entrada">Horario Entrada</option>
                    <option value="hora_salida">Horario Salida</option>
                </select>
            </div>
        </form>

        {{-- 📋 Tabla de resultados --}}
        @if(isset($horario_guias) && $horario_guias->isNotEmpty())
            <table class="table table-striped table-bordered align-middle">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Guía</th>
                        <th>Fecha</th>
                        <th>Horario Entrada</th>
                        <th>Horario Salida</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($horario_guias as $index => $horario)
                        <tr>
                            <th scope="row">{{ $index + 1 }}</th>
                            <td>
                                <strong>{{ $horario->guia->empleado->nombre }} {{ $horario->guia->empleado->apellido_p }} {{ $horario->guia->empleado->apellido_m }}</strong><br>
                                {{ $horario->guia->empleado->telefono }}<br>
                                {{ ucfirst($horario->guia->empleado->tipo_empleado) }}
                            </td>
                            <td>{{ $horario->fecha }}</td>
                            <td>{{ $horario->hora_entrada }}</td>
                            <td>{{ $horario->hora_salida }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @elseif(request()->has('campo'))
            <div class="alert alert-warning text-center mt-4">
                No se encontraron horarios con ese filtro.
            </div>
        @endif

    </div>
</x-app-layout>