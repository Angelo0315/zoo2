    <div class="container py-4">

        {{-- Botones superiores --}}
        <div class="d-flex flex-wrap justify-content-center gap-3 mb-4">
            <a href="{{ route('especies.create') }}" class="btn btn-outline-success fw-bold">
                ➕ Nuevo
            </a>
            <a href="{{ route('especies.index') }}" class="btn btn-outline-primary fw-bold">
                📋 Ver Lista
            </a>
            <a href="{{ route('especies.search') }}" class="btn btn-outline-info fw-bold">
                🔍 Buscar
            </a>
        </div>

        {{-- Contenedor principal --}}
        <div class="p-4 rounded shadow-sm" style="background-color:#d49e17; border-radius: 15px;">
            <h1 class="text-center text-white mb-4"><strong>Registrar Especies</strong></h1>

            <form action="{{ route('especies.store') }}" method="POST">
                @csrf

                {{-- Guía --}}
                <div class="form-floating mb-3">
                    <select class="form-select" name="id_cuidador" id="id_cuidador" required>
                        <option value="">Selecciona un Cuidador</option>
                        @foreach($cuidadors as $cuidador)
                        <option value="{{ $cuidador->id }}" {{ old('id_cuidador') == $cuidador->id ? 'selected' : '' }}>
                            {{ $cuidador->empleado->nombre }} 
                            {{ $cuidador->empleado->apellido_p }} 
                            {{ $cuidador->empleado->apellido_m }} |
                            {{ $cuidador->empleado->telefono }} |
                        </option>
                    @endforeach
                    </select>
                    <label for="id_Cuidador">Cuidador</label>
                </div>

                {{-- Horario del Cuidador --}}
                <div class="form-floating mb-3">
                    <select class="form-select" name="id_horario_cuidador" id="id_horario_guia" required>
                        <option value="">Selecciona un horario</option>
                        @foreach($horario_cuidadors as $horario)
                            <option value="{{ $horario->id }}" {{ old('id_horario_cuidador') == $horario->id ? 'selected' : '' }}>
                                {{ $horario->cuidador->empleado->nombre }} {{ $horario->cuidador->empleado->apellido_p }}
                                | {{ $horario->fecha }} 
                                | {{ $horario->hora_entrada }} - {{ $horario->hora_salida }}
                            </option>
                        @endforeach
                    </select>
                    <label for="id_horario_cuidador">Horario de los Cuidadores</label>
                </div>


                {{-- Especie --}}
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}" required>
                    <label for="nombre">Nombre de la Especie</label>
                </div>

                {{-- Nombre Cientifico --}}
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="nombre_cientifico" name="nombre_cientifico" value="{{ old('nombre_cientifico') }}" required>
                    <label for="nombre_cientifico">Nombre Científico</label>
                </div>

                {{-- Descripcion --}}
                <div class="form-floating mb-4">
                    <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ old('descripcion') }}" required>
                    <label for="descripcion">Descripción</label>
                </div>

                {{-- Botones finales --}}
                <div class="d-flex justify-content-center gap-3">
                    <button type="submit" class="btn text-white" style="background-color: #49ae27;"><strong>Enviar</strong></button>
                    <a href="{{ route('especies.index') }}" class="btn btn-secondary">Volver a Lista</a>
                </div>

            </form>
        </div>
    </div>
