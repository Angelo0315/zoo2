<x-app-layout>
    <div class="container py-4">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">


            {{-- Card: GUÍAS --}}
            <div class="col">
                <div class="card text-white h-100" style="background-color: #fd7e14;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-uppercase fw-bold">Empleados</h5>
                        <p class="card-text">Consulta y edita la información del personal empleado.</p>
                        <a href="{{ route('empleados.index') }}" class="btn btn-dark mt-auto">Ir a Empleados</a>
                    </div>
                </div>
            </div>

            {{-- Card: ESPECIES --}}
            <div class="col">
                <div class="card text-white h-100" style="background-color: #fd7e14;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-uppercase fw-bold">Especies</h5>
                        <p class="card-text">Consulta, filtra y administra las especies del zoológico.</p>
                        <a href="{{ route('especies.index') }}" class="btn btn-dark mt-auto">Ir a Especies</a>
                    </div>
                </div>
            </div>

            {{-- Card: HÁBITATS --}}
            <div class="col">
                <div class="card text-white h-100" style="background-color: #fd7e14;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-uppercase fw-bold">Hábitats</h5>
                        <p class="card-text">Gestiona los hábitats según su clima y continente.</p>
                        <a href="{{ route('habitats.index') }}" class="btn btn-dark mt-auto">Ir a Hábitats</a>
                    </div>
                </div>
            </div>

            {{-- Card: ZONAS --}}
            <div class="col">
                <div class="card text-white h-100" style="background-color: #fd7e14;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-uppercase fw-bold">Zonas</h5>
                        <p class="card-text">Administra las zonas del zoológico y su recorrido.</p>
                        <a href="{{ route('zonas.index') }}" class="btn btn-dark mt-auto">Ir a Zonas</a>
                    </div>
                </div>
            </div>

            {{-- Card: RECORRIODS --}}
            <div class="col">
                <div class="card text-white h-100" style="background-color: #fd7e14;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-uppercase fw-bold">Recorridos</h5>
                        <p class="card-text">Registra los reccorridos</p>
                        <a href="{{ route('recorridos.index') }}" class="btn btn-dark mt-auto">Ir a Recorridos</a>
                    </div>
                </div>
            </div>

            {{-- Card: ITINERARIOS --}}
            <div class="col">
                <div class="card text-white h-100" style="background-color: #fd7e14;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-uppercase fw-bold">Itinerarios</h5>
                        <p class="card-text">Define recorridos y tiempos estimados de visita.</p>
                        <a href="{{ route('itinerarios.index') }}" class="btn btn-dark mt-auto">Ir a Itinerarios</a>
                    </div>
                </div>
            </div>

            {{-- Card: GUÍAS --}}
            <div class="col">
                <div class="card text-white h-100" style="background-color: #fd7e14;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-uppercase fw-bold">Guías</h5>
                        <p class="card-text">Consulta y edita la información del personal guía.</p>
                        <a href="{{ route('guias.index') }}" class="btn btn-dark mt-auto">Ir a Guías</a>
                    </div>
                </div>
            </div>

            {{-- Card: Horarios de Guias --}}
            <div class="col">
                <div class="card text-white h-100" style="background-color: #fd7e14;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-uppercase fw-bold">Horario de Guías</h5>
                        <p class="card-text">Consulta y edita el horario del personal guía.</p>
                        <a href="{{ route('horario_guias.index') }}" class="btn btn-dark mt-auto">Ir a Horario de los Guías</a>
                    </div>
                </div>
            </div>

            {{-- Card: CUIDADORES --}}
            <div class="col">
                <div class="card text-white h-100" style="background-color: #fd7e14;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-uppercase fw-bold">Cuidadores</h5>
                        <p class="card-text">Administra las áreas y especies asignadas a cuidadores.</p>
                        <a href="{{ route('cuidadors.index') }}" class="btn btn-dark mt-auto">Ir a Cuidadores</a>
                    </div>
                </div>
            </div>

            {{-- Card: Horarios de Cuidadores --}}
            <div class="col">
                <div class="card text-white h-100" style="background-color: #fd7e14;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-uppercase fw-bold">Horario de Cuidadores</h5>
                        <p class="card-text">Consulta y edita el horario de los personal Cuidadores.</p>
                        <a href="{{ route('horario_cuidadors.index') }}" class="btn btn-dark mt-auto">Ir a Horario de los Cuidadores</a>
                    </div>
                </div>
            </div>

        </div>

        <div class="text-center mt-5">
            <a href="{{ route('logout') }}" class="btn btn-danger">Cerrar Sesión</a>
        </div>
    </div>
</x-app-layout>