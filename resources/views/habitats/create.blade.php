<x-app-layout>
    <br>
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
    <div class="major container" style="background-color:#d49e17; border-radius: 15px;">
        <br>
        <h1 class="text-center text-white"><strong>REGISTRAR HABITAT</strong></h1>
        <br>
        <form action="{{ route('habitats.store') }}" method="post">
            @csrf
            @include('habitats.form-fields')
            <div style="margin: 10px;">
                <button type="submit" class="btn text-white" style="background-color: #49ae27;"><strong>Enviar</strong></button>
                <a href="{{ route('habitats.index') }}" class="btn btn-secondary">Mostrar Habitat</a>
                <br>
                <br>
            </div>
        </form>
    </div>
</x-app-layout>