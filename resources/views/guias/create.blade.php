<x-app-layout>
    <br>
    <div class="major container" style="background-color:aqua;">
        <h2>Registrar Guias</h2>
        <br>
        <form action="{{ route('guias.store') }}" method="post">
            @csrf
            @include('guias.form-fields')
            <div style="margin: 10px;">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <a href="{{ route('guias.index') }}" class="btn btn-secondary">Mostrar Guias</a>
            </div>
        </form>
    </div>
</x-app-layout>