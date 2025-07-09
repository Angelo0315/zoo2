<x-app-layout>
    <br>
    <div class="major container" style="background-color:aqua;">
        <h2>Registrar Especie</h2>
        <br>
        <form action="{{ route('especies.store') }}" method="post">
            @csrf
            @include('especies.form-fields')
            <div style="margin: 10px;">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <a href="{{ route('especies.index') }}" class="btn btn-secondary">Mostrar Las especies</a>
            </div>
        </form>
    </div>
</x-app-layout>