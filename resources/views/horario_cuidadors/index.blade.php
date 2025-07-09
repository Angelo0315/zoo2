<x-app-layout>
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
    <br>
    <div class="major container">
        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle text-center">
                <thead class ="table-light">
                    <tr>
                        <th>Cuidador</th>
                        <th>Fecha</th>
                        <th>Hora entrada</th>
                        <th>Hora salida</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($horario_cuidadors as $index => $horario_cuidador)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $horario_cuidador->cuidador->empleado->nombre }}
                                {{ $horario_cuidador->cuidador->empleado->apellido_p }}
                                {{ $horario_cuidador->cuidador->empleado->apellido_m }}<br>
                                {{ $horario_cuidador->cuidador->empleado->telefono }}<br>
                                {{ ucfirst($horario_cuidador->cuidador->empleado->tipo_empleado) }}


                            </td>
                            <td>{{ $horario_cuidador->fecha }}</td>
                            <td>{{ $horario_cuidador->hora_entrada }}</td>
                            <td>{{ $horario_cuidador->hora_salida }}</td>
                            <td>
                                <a href="{{ route('horario_cuidadors.edit', $horario_cuidador) }}"
                                class="btn btn-outline-primary">Editar</a>
                            </td>
                            <td>

                                <form action="{{ route('horario_cuidadors.destroy', $horario_cuidador) }}" method="post">
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
        <a href="{{ route('horario_cuidadors.create') }}" class="btn btn-secondary">Registrar Horario</a>
    </div>
</x-app-layout>