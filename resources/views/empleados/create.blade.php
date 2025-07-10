<x-app-layout>
    <br>
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
    <div class="major container" style="background-color:#d49e17; border-radius: 15px;">
        <br>
        <h1 class="text-center text-white"><strong>REGISTRAR EMPLEADO</strong></h1>
        <br>
        <form action="{{ route('empleados.store') }}" method="post">
            @csrf
            @include('empleados.form-fields')
            <div style="margin: 10px;">
                <button type="submit" class="btn text-white" style="background-color: #49ae27;"><strong>Enviar</strong></button>
                <a href="{{ route('empleados.index') }}" class="btn btn-secondary">Mostrar Empleados</a>
                <br>
                <br>
            </div>
        </form>
    </div>
</x-app-layout>