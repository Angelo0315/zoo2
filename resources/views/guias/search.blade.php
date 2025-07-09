<x-app-layout>
    <div class="d-flex flex-wrap justify-content-center gap-3 mb-4">
            <a href="{{ route('guias.create') }}" class="btn btn-outline-success fw-bold">
                ➕ Nuevo
            </a>
            <a href="{{ route('guias.index') }}" class="btn btn-outline-primary fw-bold">
                📋 Ver Lista
            </a>
            <a href="{{ route('guias.search') }}" class="btn btn-outline-info fw-bold">
                🔍 Buscar
            </a>
        </div>
    <br>
    <div class="container">
        <form action="{{ route('guias.search') }}" method="get">
            <div class="input-group mb-3">
                <button class="btn btn-outline-secondary" type="submit">Buscar por</button>
                <input id="filtro" name="filtro" type="text" class="form-control" placeholder="Escribe el valor" required>
                <select class="form-select" id="campo" name="campo" required>
                    <option value="empleado">Guía</option>
                    <option value="fecha_ingreso">Fecha</option>
                </select>
                </select>

            </div>
        </form>


        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Guía</th>
                    <th scope="col">Fecha ingreso</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($guias as $guia)
                    <tr>
                        <th scope="row">1</th>
                        <td>

                        {{ $guia->empleado->nombre }}
                        {{ $guia->empleado->apellido_p }}
                        {{ $guia->empleado->apellido_m}}
                        {{ $guia->empleado->telefono }}
                        {{ $guia->empleado->tipo_empleado }}

                        </td>

                        <td>{{ $guia->fecha_ingreso }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</x-app-layout>