<x-app-layout>
    <br>
    <div class="major container" style="background-color:aqua;">
        <h2>Registrar Itinerario</h2>
        <br>
        <form action="{{ route('itinerarios.store') }}" method="post">
            @csrf
            @include('itinerarios.form-fields')
            <div style="margin: 10px;">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <a href="{{ route('itinerarios.index') }}" class="btn btn-secondary">Mostrar Los Itinerarios</a>
            </div>
        </form>
    </div>
</x-app-layout>