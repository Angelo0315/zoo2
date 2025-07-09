<div class="form-floating mb-3">
    <div class="d-flex flex-wrap justify-content-center gap-3 mb-4">
            <a href="{{ route('zonas.create') }}" class="btn btn-outline-success fw-bold">
                ➕ Nuevo
            </a>
            <a href="{{ route('zonas.index') }}" class="btn btn-outline-primary fw-bold">
                📋 Ver Lista
            </a>
            <a href="{{ route('zonas.search') }}" class="btn btn-outline-info fw-bold">
                🔍 Buscar
            </a>
        </div>
    <select class="form-select" name="id_itinerario" id="id_itinerario" required>
        <option value="">Selecciona un Itinerario</option>
        @foreach($itinerarios as $itinerario)
            <option value="{{ $itinerario->id }}" {{ old('id_itinerario', $zona->id_itinerario ?? '') == $itinerario->id ? 'selected' : '' }}>
                                {{ $itinerario->fecha }} | 
                                {{ $itinerario->duracion }} |
                                 {{ $itinerario->longitud }} |
                                 {{ $itinerario->cantidad_personas }} |
                                 {{ $itinerario->cantidad_especies }}
            </option>

        @endforeach
    </select>
    <label for="id_itinerario">Itinerario</label>
</div>

<div class="form-floating mb-3">
    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre', $zona->nombre ?? '') }}" required>
    <label for="nombre">Nombre de la Zona</label>
</div>

<div class="form-floating mb-3">
    <input type="number" step="0.01" class="form-control" id="extension" name="extension" value="{{ old('extension', $zona->extension ?? '') }}" required>
    <label for="extension">Nombre de la extención</label>
</div>





