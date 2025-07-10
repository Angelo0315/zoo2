<x-app-layout>
    <br>
    {{-- Botones superiores --}}
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
    <div class="major container" style="background-color:#d49e17; border-radius: 15px;">
        <form action="{{ route('itinerarios.store') }}" method="post">
            @csrf
            @include('itinerarios.form-fields')
            <div style="margin: 10px;">
            </div>
        </form>
    </div>
</x-app-layout>