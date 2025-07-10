<x-guest-layout>
    <div class="container-fluid vh-100 p-0">
        <div class="row g-0 h-100">
            <!-- Lado Izquierdo: Formulario -->
            <div class="col-12 col-md-6 d-flex align-items-center justify-content-center" style="background-color: #e8d8c3;">
                <div class="w-75">
                    <div class="text-center mb-4">
                        <img src="{{ asset('logo.png') }}" alt="Zoológicos" class="img-fluid" style="max-height: 80px;">
                    </div>
                    <h3 class="text-center fw-bold mb-4">INICIAR SESIÓN</h3>

                    <!-- Mensaje de estado -->
                    <x-auth-session-status class="mb-3" :status="session('status')" />

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Número de empleado -->
                        <div class="mb-3">
                            <x-input-label for="email" :value="__('Correo de empleado:')" />
                            <x-text-input id="email" class="form-control" type="text" name="email" :value="old('email')" required autofocus />
                            <x-input-error :messages="$errors->get('email')" class="mt-1" />
                        </div>

                        <!-- Contraseña -->
                        <div class="mb-3">
                            <x-input-label for="password" :value="__('Contraseña:')" />
                            <x-text-input id="password" class="form-control" type="password" name="password" required />
                            <x-input-error :messages="$errors->get('password')" class="mt-1" />
                        </div>

                        <div class="d-flex justify-content-between mb-3">
                            <x-primary-button class="btn btn-dark">
                                {{ __('Iniciar sesión') }}
                            </x-primary-button>

                            @if (Route::has('password.request'))
                                <a class="text-muted small align-self-center" href="{{ route('password.request') }}">
                                    Olvidé mi contraseña
                                </a>
                            @endif
                        </div>

                        <div class="text-center my-3">
                            <a class="btn btn-custom" href="{{ route('register') }}">Crear cuenta</a>
                        </div>

                        <div class="text-center mb-3">
                            <hr>
                            <span class="small text-muted">O</span>
                            <hr>
                        </div>

                        <div class="text-center">
                            <a href="/google-auth/redirect" class="btn btn-outline-danger">
                                <img src="https://img.icons8.com/color/16/000000/google-logo.png" class="me-2">
                                Iniciar sesión con Google
                            </a>
                        </div>

                    </form>
                </div>
            </div>

            <!-- Lado Derecho: Imagen -->
            <div class="col-12 col-md-6 d-none d-md-block" style="background: url('{{ asset('/fondo.png') }}') center center / cover no-repeat;">
            </div>
        </div>
    </div>
</x-guest-layout>
