<x-app-layout>
    <br>
    <div class="major container" style="background-color:aqua;">
        <h2>Registrar los Recorridos</h2>
        <br>
        <form action="{{ route('recorridos.store') }}" method="post">
            @csrf
            @include('recorridos.form-fields')
            <div style="margin: 10px;">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <a href="{{ route('recorridos.index') }}" class="btn btn-secondary">Mostrar por donde paso el Recorrido</a>
            </div>
        </form>
    </div>
</x-app-layout>