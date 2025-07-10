<x-app-layout>
    <br>
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
        <form action="{{ route('horario_cuidadors.store') }}" method="post">
            @csrf
            @include('horario_cuidadors.form-fields')
        </form>
</x-app-layout>