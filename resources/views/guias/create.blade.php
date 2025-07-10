<x-app-layout>
    <br>
        <div class="d-flex flex-wrap justify-content-center gap-3 mb-4">
            <a href="{{ route('guias.create') }}" class="btn btn-outline-success fw-bold">
                ➕ Nuevo
            </a>
            <a href="{{ route('guias.index') }}" class="btn btn-outline-primary fw-bold">
                📋 Ver Lista
            </a>
            <a href="{{ route('guias.search') }}" class="btn btn-outline-info fw-bold">
                🔍 Buscar
            </a>
        </div>
    <div class="major container" style="background-color:#d49e17; border-radius: 15px;">
        <br>
        <form action="{{ route('guias.store') }}" method="post">
            <h1 class="text-center text-white mb-4"><strong>Registrar Guia</strong></h1>
            @csrf
            @include('guias.form-fields')
            <div style="margin: 10px;">
                <button type="submit" class="btn text-white" style="background-color: #49ae27;"><strong>Enviar</strong></button>
                <a href="{{ route('guias.index') }}" class="btn btn-secondary">Mostrar Guias</a>
            </div>
            <br>
        </form>
    </div>
</x-app-layout>