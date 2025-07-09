<x-app-layout>
    <br>
    <div class="major container" style="background-color:aqua;">
        <h2>Registrar Horario</h2>
        <br>
        <form action="{{ route('horario_guias.store') }}" method="post">
            @csrf
            @include('horario_guias.form-fields')
            <div style="margin: 10px;">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <a href="{{ route('horario_guias.index') }}" class="btn btn-secondary">Mostrar Horario de los Guias</a>
            </div>
        </form>
    </div>
</x-app-layout>