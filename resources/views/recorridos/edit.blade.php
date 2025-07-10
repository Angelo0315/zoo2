<x-app-layout>
    <div class="container">
        <div class="d-flex flex-wrap justify-content-center gap-3 mb-4">
            <a href="{{ route('recorridos.create') }}" class="btn btn-outline-success fw-bold">
                ➕ Nuevo
            </a>
            <a href="{{ route('recorridos.index') }}" class="btn btn-outline-primary fw-bold">
                📋 Ver Lista
            </a>
            <a href="{{ route('recorridos.search') }}" class="btn btn-outline-info fw-bold">
                🔍 Buscar
            </a>
        </div>
    <br>
    <div class="major container" style="background-color:#d49e17; border-radius: 15px;">
        <br>
        <h1 class="text-center text-white mb-4"><strong>Editar Recorrido</strong></h1>
        <form action="{{ route('recorridos.update', $recorrido) }}" method="post">
            @csrf @method('PATCH')
            @include('recorridos.form-fields')
            <div style="margin: 10px;">
                <button type="submit" class="btn text-white" style="background-color: #49ae27;"><strong>Enviar</strong></button>
                <a href="{{ route('recorridos.index') }}" class=" btn btn-secondary">Regresar</a>
            </div>
            <br>
        </form>
    </div>
</x-app-layout>