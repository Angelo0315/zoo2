<x-app-layout>
    <div class="d-flex flex-wrap justify-content-center gap-3 mb-4">
            <a href="{{ route('itinerarios.create') }}" class="btn btn-outline-success fw-bold">
                ➕ Nuevo
            </a>
            <a href="{{ route('itinerarios.index') }}" class="btn btn-outline-primary fw-bold">
                📋 Ver Lista
            </a>
            <a href="{{ route('itinerarios.search') }}" class="btn btn-outline-info fw-bold">
                🔍 Buscar
            </a>
        </div>
    <br>
    <div class="major container">
        <h2>Editar Los Itinerarios</h2>
        <form action="{{ route('itinerarios.update', $itinerario) }}" method="post">
            @csrf @method('PATCH')
            @include('itinerarios.form-fields')
            <div style="margin: 10px;">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <a href="{{ route('itinerarios.index') }}" class="btn btn-outline-secondary">Regresar</a>
            </div>
        </form>
    </div>
</x-app-layout>