<x-app-layout>
    <br>
    <div class="major container" style="background-color:aqua;">
        <h2>Registrar Habitat</h2>
        <br>
        <form action="{{ route('habitats.store') }}" method="post">
            @csrf
            @include('habitats.form-fields')
            <div style="margin: 10px;">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <a href="{{ route('habitats.index') }}" class="btn btn-secondary">Mostrar Habitat</a>
            </div>
        </form>
    </div>
</x-app-layout>