<x-guest-layout>
        <div class="row g-0 h-100" >
            <!-- Lado Izquierdo: Imagen -->
            <div class="col-12 col-md-6 d-none d-md-block" style="background: url('{{ asset('/fondo.png') }}') center center / cover no-repeat;">
            </div>

            <!-- Lado Derecho: Formulario -->
            <!-- Lado Derecho: Formulario -->
<div class="col-12 col-md-6 d-flex align-items-center justify-content-center" style="background-color:#e8d8c3;">
    <div class="w-75">
        <h2 class="text-center fw-bold mb-4" style="color: #1c1c1c;">Zoológicos</h2>
        <h4 class="text-center mb-4">Crear Cuenta</h4>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Nombres -->
                        <div class="mb-3">
                            <x-input-label for="name" :value="__('Nombres')" />
                            <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus />
                            <x-input-error :messages="$errors->get('name')" class="mt-1" />
                        </div>

                        <!-- Apellidos -->
                        <div class="mb-3">
                            <x-input-label for="last_name" :value="__('Apellidos')" />
                            <x-text-input id="last_name" class="form-control" type="text" name="last_name" :value="old('last_name')" required />
                            <x-input-error :messages="$errors->get('last_name')" class="mt-1" />
                        </div>

                        <!-- Número de empleado -->
                        <div class="mb-3">
                            <x-input-label for="employee_number" :value="__('Número de empleado')" />
                            <x-text-input id="employee_number" class="form-control" type="text" name="employee_number" :value="old('employee_number')" required />
                            <x-input-error :messages="$errors->get('employee_number')" class="mt-1" />
                        </div>

                        <!-- Correo -->
                        <div class="mb-3">
                            <x-input-label for="email" :value="__('Correo')" />
                            <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
                            <x-input-error :messages="$errors->get('email')" class="mt-1" />
                        </div>

                        <!-- Contraseña -->
                        <div class="mb-3">
                            <x-input-label for="password" :value="__('Contraseña')" />
                            <x-text-input id="password" class="form-control" type="password" name="password" required />
                            <x-input-error :messages="$errors->get('password')" class="mt-1" />
                        </div>

                        <!-- Confirmación -->
                        <div class="mb-4">
                            <x-input-label for="password_confirmation" :value="__('Confirmar Contraseña')" />
                            <x-text-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required />
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1" />
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <a class="text-muted small" href="{{ route('login') }}">
                                ¿Ya tienes cuenta?
                            </a>
                            <x-primary-button class="btn btn-success">
                                {{ __('Crear Cuenta') }}
                            </x-primary-button>
                        </div>

                        <hr class="my-4">

                        <div class="text-center">
                            <a href="/google-auth/redirect" class="btn btn-outline-danger">
                                <img src="https://img.icons8.com/color/16/000000/google-logo.png" class="me-2">
                                Iniciar sesión con Google
                            </a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
</x-guest-layout>
