<x-app-layout>
    <div class="d-flex flex-wrap justify-content-center gap-3 mb-4">
            <a href="{{ route('cuidadors.create') }}" class="btn btn-outline-success fw-bold">
                ➕ Nuevo
            </a>
            <a href="{{ route('cuidadors.index') }}" class="btn btn-outline-primary fw-bold">
                📋 Ver Lista
            </a>
            <a href="{{ route('cuidadors.search') }}" class="btn btn-outline-info fw-bold">
                🔍 Buscar
            </a>
        </div>
    <br>
    <div class="major container" style="background-color:#d49e17; border-radius: 15px;">
        <form action="{{ route('cuidadors.update', $cuidador) }}" method="post">
            @csrf @method('PATCH')
            @include('cuidadors.form-fields')
            <div style="margin: 10px;">
                <button type="submit" class="btn text-white" style="background-color: #49ae27;"><strong>Enviar</strong></button>
                <a href="{{ route('cuidadors.index') }}" class="btn btn-secondary">Regresar</a>
            </div>
            <br>
        </form>
    </div>
</x-app-layout>