<x-app-layout>
    <br>
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
        <form action="{{ route('horario_guias.store') }}" method="post">
            @csrf
            @include('horario_guias.form-fields')
        </form>
</x-app-layout>