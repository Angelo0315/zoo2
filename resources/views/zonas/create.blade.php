<x-app-layout>
    <br>
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
    <div class="major container" style="background-color:#d49e17; border-radius: 15px;">
        <br>
        <h1 class="text-center text-white"><strong>Registrar Zonas</strong></h1>
        <br>
        <form action="{{ route('zonas.store') }}" method="post">
            @csrf
            @include('zonas.form-fields')
            <div style="margin: 10px;">
                <button type="submit" class="btn text-white" style="background-color: #49ae27;"><strong>Enviar</strong></button>
                <a href="{{ route('zonas.index') }}" class="btn btn-secondary">Mostrar Zonas</a>
                <br>
                <br>
            </div>
        </form>
    </div>
</x-app-layout>