<x-app-layout>
    <br>
    <div class="major container">
        <form action="{{ route('horario_guias.update', $horario_guia) }}" method="post">
            @csrf @method('PATCH')
            @include('horario_guias.form-fields')

        </form>
    </div>
</x-app-layout>