<x-app-layout>
    <br>
    <div class="major container" style="background-color:aqua;">
        <h2>Registrar Cuidadores</h2>
        <br>
        <form action="{{ route('cuidadors.store') }}" method="post">
            @csrf
            @include('cuidadors.form-fields')
            <div style="margin: 10px;">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <a href="{{ route('cuidadors.index') }}" class="btn btn-secondary">Mostrar Cuidadores</a>
            </div>
        </form>
    </div>
</x-app-layout>