    <div class="container py-4">
    <div class="major container" style="background-color:#d49e17; border-radius: 15px;">

        {{-- Contenedor principal --}}
        <br>
            <h1 class="text-center text-white mb-4"><strong>Registrar Itinerarios</strong></h1>

            <form action="{{ route('itinerarios.store') }}" method="POST">
                @csrf

                {{-- Guía --}}
                <div class="form-floating mb-3">
                    <select class="form-select" name="id_guia" id="id_guia" required>
                        <option value="">Selecciona un guía</option>
                        @foreach($guias as $guia)
                        <option value="{{ $guia->id }}" {{ old('id_guia') == $guia->id ? 'selected' : '' }}>
                            {{ $guia->empleado->nombre }} {{ $guia->empleado->apellido_p }} {{ $guia->empleado->apellido_m }} |
                            {{ $guia->empleado->telefono }} |
                        </option>
                    @endforeach
                    </select>
                    <label for="id_guia">Guía</label>
                </div>

                {{-- Horario del Guía --}}
                <div class="form-floating mb-3">
                    <select class="form-select" name="id_horario_guia" id="id_horario_guia" required>
                        <option value="">Selecciona un horario</option>
                        @foreach($horario_guias as $horario)
                            <option value="{{ $horario->id }}" {{ old('id_horario_guia') == $horario->id ? 'selected' : '' }}>
                                {{ $horario->guia->empleado->nombre }} {{ $horario->guia->empleado->apellido_p }}
                                | {{ $horario->fecha }} 
                                | {{ $horario->hora_entrada }} - {{ $horario->hora_salida }}
                            </option>
                        @endforeach
                    </select>
                    <label for="id_horario_guia">Horario de los Guías</label>
                </div>


                {{-- Fecha --}}
                <div class="form-floating mb-3">
                    <input type="date" class="form-control" id="fecha" name="fecha" value="{{ old('fecha') }}" required>
                    <label for="fecha">Fecha</label>
                </div>

                {{-- Duracion --}}
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="duracion" name="duracion" value="{{ old('duracion') }}" required>
                    <label for="duracion">Duracion</label>
                </div>

                {{-- Longitud --}}
                <div class="form-floating mb-4">
                    <input type="number" step="0.01" class="form-control" id="longitud" name="longitud" value="{{ old('longitud') }}" required>
                    <label for="longitud">Longitud</label>
                </div>

                {{-- Cantidad de personas --}}
                <div class="form-floating mb-4">
                    <input type="number" class="form-control" id="cantidad_personas" name="cantidad_personas" value="{{ old('cantidad_personas') }}" required>
                    <label for="cantidad_personas">Pasajeros</label>
                </div>

                {{-- Cantidad de personas --}}
                <div class="form-floating mb-4">
                    <input type="number" class="form-control" id="cantidad_especies" name="cantidad_especies" value="{{ old('cantidad_especies') }}" required>
                    <label for="cantidad_especies">Especies por Ver</label>
                </div>

                {{-- Botones finales --}}
                <div class="d-flex justify-content-center gap-3">
                    <button type="submit" class="btn text-white" style="background-color: #49ae27;"><strong>Enviar</strong></button>
                    <a href="{{ route('itinerarios.index') }}" class="btn btn-secondary">Volver a Lista</a>
                </div>
                <br>

            </form>
    </div>
