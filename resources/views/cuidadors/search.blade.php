<x-app-layout>
    <br>
    <div class="container">
        <div class="d-flex flex-wrap justify-content-center gap-3 mb-4">
            <a href="{{ route('cuidadors.create') }}" class="btn btn-outline-success fw-bold">
                ➕ Nuevo
            </a>
            <a href="{{ route('cuidadors.index') }}" class="btn btn-outline-primary fw-bold">
                📋 Ver Lista
            </a>
            <a href="{{ route('cuidadors.search') }}" class="btn btn-outline-info fw-bold">
                🔍 Buscar
            </a>
        </div>
        <form action="{{ route('cuidadors.search') }}" method="get">
            <div class="input-group mb-3">
                <button class="btn btn-outline-secondary" type="submit">Buscar por</button>
                <input id="filtro" name="filtro" type="text" class="form-control" placeholder="Escribe el valor" required>
                <select class="form-select" id="campo" name="campo" required>
                    <option value="empleado">Cuidador</option>
                    <option value="fecha_ingreso">Fecha</option>
                </select>
                </select>

            </div>
        </form>


        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Cuidador</th>
                    <th scope="col">Fecha ingreso</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cuidadors as $cuidador)
                    <tr>
                        <th scope="row">1</th>
                        <td>

                        {{ $cuidador->empleado->nombre }}
                        {{ $cuidador->empleado->apellido_p }}
                        {{ $cuidador->empleado->apellido_m}}
                        {{ $cuidador->empleado->telefono }}
                        {{ $cuidador->empleado->direccion }}

                        </td>

                        <td>{{ $cuidador->fecha_ingreso }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</x-app-layout>