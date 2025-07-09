<x-app-layout>
    <br>
    <div class="major container" style="background-color:aqua;">
        <h2>Registrar Zonas</h2>
        <br>
        <form action="{{ route('zonas.store') }}" method="post">
            @csrf
            @include('zonas.form-fields')
            <div style="margin: 10px;">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <a href="{{ route('zonas.index') }}" class="btn btn-secondary">Mostrar Zonas</a>
            </div>
        </form>
    </div>
</x-app-layout>