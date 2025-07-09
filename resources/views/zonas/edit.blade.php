<x-app-layout>
    <div class="container">
        <div class="d-flex flex-wrap justify-content-center gap-3 mb-4">
            <a href="{{ route('zonas.create') }}" class="btn btn-outline-success fw-bold">
                ➕ Nuevo
            </a>
            <a href="{{ route('zonas.index') }}" class="btn btn-outline-primary fw-bold">
                📋 Ver Lista
            </a>
            <a href="{{ route('zonas.search') }}" class="btn btn-outline-info fw-bold">
                🔍 Buscar
            </a>
        </div>
    <br>
    <div class="major container">
        <h2>Editar Zonas</h2>
        <form action="{{ route('zonas.update', $zona) }}" method="post">
            @csrf @method('PATCH')
            @include('zonas.form-fields')
            <div style="margin: 10px;">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <a href="{{ route('zonas.index') }}" class="btn btn-outline-secondary">Regresar</a>
            </div>
        </form>
    </div>
</x-app-layout>