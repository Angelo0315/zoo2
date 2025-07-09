<x-app-layout>
    <br>
    <div class="major container" style="background-color:aqua;">
        <h2>Registrar Horario</h2>
        <br>
        <form action="{{ route('horario_cuidadors.store') }}" method="post">
            @csrf
            @include('horario_cuidadors.form-fields')
            <div style="margin: 10px;">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <a href="{{ route('horario_cuidadors.index') }}" class="btn btn-secondary">Mostrar Horario de los Cuidadores</a>
            </div>
        </form>
    </div>
</x-app-layout>