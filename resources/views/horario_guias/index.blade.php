<x-app-layout>
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
    <br>
    <div class="major container">
        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle text-center">
                <thead class ="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Guía</th>
                        <th>Fecha</th>
                        <th>Hora entrada</th>
                        <th>Hora salida</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($horario_guias as $index => $horario_guia)
                        <tr>
                            <td>{{ $index + 1 }}</td>

                            <td>{{ $horario_guia->guia->empleado->nombre }}
                                {{ $horario_guia->guia->empleado->apellido_p }}
                                {{ $horario_guia->guia->empleado->apellido_m }}<br>
                                {{ $horario_guia->guia->empleado->telefono }}<br>
                                {{ ucfirst($horario_guia->guia->empleado->tipo_empleado) }}


                            </td>
                            <td>{{ $horario_guia->fecha }}</td>
                            <td>{{ $horario_guia->hora_entrada }}</td>
                            <td>{{ $horario_guia->hora_salida }}</td>
                            <td>
                                <a href="{{ route('horario_guias.edit', $horario_guia) }}"
                                class="btn btn-outline-primary">Editar</a>
                            </td>
                            <td>

                                <form action="{{ route('horario_guias.destroy', $horario_guia) }}" method="post">
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
        <a href="{{ route('horario_guias.create') }}" class="btn btn-secondary">Registrar Horario</a>
    </div>
</x-app-layout>