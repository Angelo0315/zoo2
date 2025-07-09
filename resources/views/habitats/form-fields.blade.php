<div class="form-floating mb-3">
    <div class="d-flex flex-wrap justify-content-center gap-3 mb-4">
            <a href="{{ route('habitats.create') }}" class="btn btn-outline-success fw-bold">
                ➕ Nuevo
            </a>
            <a href="{{ route('habitats.index') }}" class="btn btn-outline-primary fw-bold">
                📋 Ver Lista
            </a>
            <a href="{{ route('habitats.search') }}" class="btn btn-outline-info fw-bold">
                🔍 Buscar
            </a>
        </div>
    <select class="form-select" name="id_especie" id="id_especie" required>
        <option value="">Selecciona una Especie</option>
        @foreach($especies as $especie)
            <option value="{{ $especie->id }}" {{ old('id_especie', $habitat->id_especie ?? '') == $especie->id ? 'selected' : '' }}>
                                {{ $especie->nombre }} | 
                                {{ $especie->nombre_cientifico }} |
                                 {{ $especie->descripcion }} |
            </option>

        @endforeach
    </select>
    <label for="id_especie">Especies</label>
</div>

<div class="form-floating mb-3">
    <input type="text" class="form-control" id="clima" name="clima" value="{{ old('clima', $habitat->clima ?? '') }}" required>
    <label for="clima">Clima</label>
</div>

<div class="form-floating mb-3">
    <input type="text" class="form-control" id="vegetacion" name="vegetacion" value="{{ old('vegetacion', $habitat->vegetacion ?? '') }}" required>
    <label for="vegetacion">Vegtacion del Habitat</label>
</div>

<div class="form-floating mb-3">
    <input type="text" class="form-control" id="continente" name="continente" value="{{ old('continente', $habitat->continente ?? '') }}" required>
    <label for="continente">Continente que se encuentra</label>
</div>





