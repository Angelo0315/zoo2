    <div class="container py-4">

        {{-- Contenedor principal --}}
        <div class="p-4 rounded shadow-sm" style="background-color:#d49e17; Border-radius: 15px;">
            <h1 class="text-center text-white mb-4"><strong>Registrar Horario de Guia</strong></h1>

            <form action="{{ route('horario_guias.store') }}" method="POST">
                @csrf

                {{-- Guía --}}
                <div class="form-floating mb-3">
                    <select class="form-select" name="id_guia" id="id_guia" required>
                        <option value="">Selecciona un guía</option>
                        @foreach($guias as $guia)
                        <option value="{{ $guia->id }}" {{ old('id_guia', $horario_guia->id_guia ?? '') == $guia->id ? 'selected' : '' }}>
                            {{ $guia->empleado->nombre }} {{ $guia->empleado->apellido_p }} {{ $guia->empleado->apellido_m }} |
                            {{ $guia->empleado->telefono }} |
                            {{ ucfirst($guia->empleado->tipo_empleado) }}
                        </option>
                    @endforeach
                    </select>
                    <label for="id_guia">Guía</label>
                </div>

                {{-- Fecha --}}
                <div class="form-floating mb-3">
                    <input type="date" class="form-control" id="fecha" name="fecha" value="{{ old('fecha') }}" required>
                    <label for="fecha">Fecha</label>
                </div>

                {{-- Horario de entrada --}}
                <div class="form-floating mb-3">
                    <input type="time" class="form-control" id="hora_entrada" name="hora_entrada" value="{{ old('hora_entrada') }}" required>
                    <label for="hora_entrada">Horario de Entrada</label>
                </div>

                {{-- Horario de salida --}}
                <div class="form-floating mb-4">
                    <input type="time" class="form-control" id="hora_salida" name="hora_salida" value="{{ old('hora_salida') }}" required>
                    <label for="hora_salida">Horario de Salida</label>
                </div>

                {{-- Botones finales --}}
                <div class="d-flex justify-content-center gap-3">
                    <button type="submit" class="btn text-white" style="background-color: #49ae27;"><strong>Enviar</strong></button>
                    <a href="{{ route('horario_guias.index') }}" class="btn btn-secondary">Volver a Lista</a>
                </div>

            </form>
        </div>
    </div>
