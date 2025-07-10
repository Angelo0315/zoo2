<x-app-layout>
    <div class="container py-4">

        {{-- 🔘 Botones superiores --}}
        <div class="d-flex flex-wrap justify-content-center gap-3 mb-4">
            <a href="{{ route('horario_cuidadors.create') }}" class="btn btn-outline-success fw-bold">
                ➕ Nuevo
            </a>
            <a href="{{ route('horario_cuidadors.index') }}" class="btn btn-outline-primary fw-bold">
                📋 Ver Lista
            </a>
            <a href="{{ route('horario_cuidadors.search') }}" class="btn btn-outline-info fw-bold">
                🔍 Buscar
            </a>
        </div>

        {{-- 🔍 Formulario de búsqueda --}}
        <form action="{{ route('horario_cuidadors.search') }}" method="get">
            <div class="input-group mb-4">
                <button class="btn btn-outline-secondary" type="submit">Buscar por</button>
                <input id="filtro" name="filtro" type="text" class="form-control" placeholder="Escribe el valor" required>
                <select class="form-select" id="campo" name="campo" required>
                    <option value="cuidador">Cuidador</option>
                    <option value="fecha">Fecha</option>
                    <option value="hora_entrada">Horario Entrada</option>
                    <option value="hora_salida">Horario Salida</option>
                </select>
            </div>
        </form>

        {{-- 📋 Tabla de resultados --}}
        @if(isset($horario_cuidadors) && $horario_cuidadors->isNotEmpty())
            <table class="table table-striped table-bordered align-middle">
                <thead class="encabezado-verde">
                    <tr>
                        <th>ID</th>
                        <th>Cuidador</th>
                        <th>Fecha</th>
                        <th>Horario Entrada</th>
                        <th>Horario Salida</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($horario_cuidadors as $index => $horario)
                        <tr>
                            <th scope="row">{{ $index + 1 }}</th>
                            <td>
                                <strong>{{ $horario->cuidador->empleado->nombre }} {{ $horario->cuidador->empleado->apellido_p }} {{ $horario->cuidador->empleado->apellido_m }}</strong><br>
                                {{ $horario->cuidador->empleado->telefono }}<br>
                                {{ ucfirst($horario->cuidador->empleado->tipo_empleado) }}
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