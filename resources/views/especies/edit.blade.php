<x-app-layout>
    <br>
    <div class="major container">
        <form action="{{ route('especies.update', $especie) }}" method="post">
            @csrf @method('PATCH')
            @include('especies.form-fields')
            <div style="margin: 10px;">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <a href="{{ route('especies.index') }}" class="btn btn-outline-secondary">Regresar</a>
            </div>
        </form>
    </div>
</x-app-layout>