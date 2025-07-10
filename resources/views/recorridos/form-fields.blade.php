<div class="form-floating mb-3">
    {{-- Zona --}}
<div class="form-floating mb-3">
    <select class="form-select" name="id_zona" id="id_zona" required>
        <option value="">Selecciona una Zona</option>
        @foreach($zonas as $zona)
            <option value="{{ $zona->id }}"
                {{ old('id_zona', $recorrido->id_zona ?? '') == $zona->id ? 'selected' : '' }}>
                {{ $zona->nombre }} | {{ $zona->extension }} km²
            </option>
        @endforeach
    </select>
    <label for="id_zona">Zona Visitada</label>
</div>

{{-- Hábitat --}}
<div class="form-floating mb-3">
    <select class="form-select" name="id_habitat" id="id_habitat" required>
        <option value="">Selecciona un Hábitat</option>
        @foreach($habitats as $habitat)
            <option value="{{ $habitat->id }}"
                {{ old('id_habitat', $recorrido->id_habitat ?? '') == $habitat->id ? 'selected' : '' }}>
                Clima: {{ $habitat->clima }} | Vegetación: {{ $habitat->vegetacion }} | Continente: {{ $habitat->continente }}
            </option>
        @endforeach
    </select>
    <label for="id_habitat">Hábitat del Recorrido</label>
</div>

{{-- Especie --}}
<div class="form-floating mb-3">
    <select class="form-select" name="id_especie" id="id_especie" required>
        <option value="">Selecciona una Especie</option>
        @foreach($especies as $especie)
            <option value="{{ $especie->id }}"
                {{ old('id_especie', $recorrido->id_especie ?? '') == $especie->id ? 'selected' : '' }}>
                {{ $especie->nombre }} | {{ $especie->nombre_cientifico }} | {{ $especie->descripcion }}
            </option>
        @endforeach
    </select>
    <label for="id_especie">Especie Observada</label>
</div>






