<x-app-layout>
    <br>
    <div class="major container" style="background-color:aqua;">
        <h2>Registrar Empleado</h2>
        <br>
        <form action="{{ route('empleados.store') }}" method="post">
            @csrf
            @include('empleados.form-fields')
            <div style="margin: 10px;">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <a href="{{ route('empleados.index') }}" class="btn btn-secondary">Mostrar Empleados</a>
            </div>
        </form>
    </div>
</x-app-layout>