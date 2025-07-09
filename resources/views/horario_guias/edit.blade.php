<x-app-layout>
    <br>
    <div class="major container">
        <h2>Editar Horarios</h2>
        <form action="{{ route('horario_guias.update', $horario_guia) }}" method="post">
            @csrf @method('PATCH')
            @include('horario_guias.form-fields')
            <div style="margin: 10px;">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <a href="{{ route('horario_guias.index') }}" class="btn btn-outline-secondary">Regresar</a>
            </div>
        </form>
    </div>
</x-app-layout>