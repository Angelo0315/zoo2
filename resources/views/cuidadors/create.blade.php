<x-app-layout>
    <br>
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
    <div class="major container" style="background-color:#d49e17; border-radius: 15px;">
        <br>
        <form action="{{ route('cuidadors.store') }}" method="post">
            @csrf
            @include('cuidadors.form-fields')
            <div style="margin: 10px;">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <a href="{{ route('cuidadors.index') }}" class="btn btn-secondary">Mostrar Cuidadores</a>
                <br>
                <br>
            </div>
        </form>
    </div>
</x-app-layout>