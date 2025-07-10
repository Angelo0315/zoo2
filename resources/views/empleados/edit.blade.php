<x-app-layout>
     <div class="d-flex flex-wrap justify-content-center gap-3 mb-4">
            <a href="{{ route('empleados.create') }}" class="btn btn-outline-success fw-bold">
                ➕ Nuevo
            </a>
            <a href="{{ route('empleados.index') }}" class="btn btn-outline-primary fw-bold">
                📋 Ver Lista
            </a>
            <a href="{{ route('empleados.search') }}" class="btn btn-outline-info fw-bold">
                🔍 Buscar
            </a>
        </div>
    <br>
    <div class="major container" style="background-color:#d49e17; border-radius: 15px;">
        <br>
        <h1 class="text-center text-white mb-4"><strong>Editar Empleados</strong></h1>
        <form action="{{ route('empleados.update', $empleado) }}" method="post">
            @csrf @method('PATCH')
            @include('empleados.form-fields')
            <div style="margin: 10px;">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <a href="{{ route('empleados.index') }}" class="btn btn-outline-secondary">Regresar</a>
            </div>
            <br>
        </form>
    </div>
</x-app-layout>