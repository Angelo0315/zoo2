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
    <div class="major container">
        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle text-center">
                <thead class ="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Especie</th>
                        <th>Clima</th>
                        <th>vegetacion</th>
                        <th>Continente</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($habitats as $index =>$habitat)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $habitat->especie->nombre }}
                                {{ $habitat->especie->nombre_cientifico}} 
                                {{ $habitat->especie->descripcion}} 
                            </td>
                            <td>{{ $habitat->clima }}</td>
                            <td>{{ $habitat->vegetacion }}</td>
                            <td>{{ $habitat->continente }}</td>
                            <td>
                                <a href="{{ route('habitats.edit', $habitat) }}"
                                class="btn btn-outline-primary">Editar</a>
                            </td>
                            <td>

                                <form action="{{ route('habitats.destroy', $habitat) }}" method="post">
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
        <a href="{{ route('habitats.create') }}" class="btn btn-secondary">Registrar Habitats</a>
    </div>
</x-app-layout>