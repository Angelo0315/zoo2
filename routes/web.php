<?php

use App\Http\Controllers\CuidadorController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\EspecieController;
use App\Http\Controllers\GuiaController;
use App\Http\Controllers\HabitatController;
use App\Http\Controllers\Horario_cuidadorController;
use App\Http\Controllers\Horario_guiaController;
use App\Http\Controllers\ItinerarioController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RecorridoController;
use App\Http\Controllers\ZonaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Rutas de la pagina que el usuario ve
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/soyempleado', function () {
    return view('soyempleado');
})->name('soyempleado');

Route::get('/animales', function () {
    return view('animales');
})->name('animales');


Route::get('/google-auth/redirect', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('/google-auth/callback', function () {
    $user_google = Socialite::driver('google')->stateless()->user();
    $user = User::updateOrCreate([
        'google_id' => $user_google -> id,
    ], [
       'name' => $user_google -> name,
       'email' => $user_google -> email,
    ]);

    Auth::login($user);

    return redirect('/dashboard');

});




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Ruta empleados
Route::middleware('auth')->group(function () {
    Route::get('/empleados', [EmpleadoController::class, 'index'])->name('empleados.index');
    Route::get('/empleados/create', [EmpleadoController::class, 'create'])->name('empleados.create');
    Route::post('/empleados/store', [EmpleadoController::class, 'store'])->name('empleados.store');
    Route::get('/empleados/edit/{empleado}', [EmpleadoController::class, 'edit'])->name('empleados.edit');
    Route::patch('/empleados/update/{empleado}', [EmpleadoController::class, 'update'])->name('empleados.update');
    Route::delete('/empleados/{empleado}', [EmpleadoController::class, 'destroy'])->name('empleados.destroy');
    Route::get('empleados/search', [EmpleadoController::class, 'search'])->name('empleados.search');});

//Ruta de Guias
Route::middleware('auth')->group(function () {
    Route::get('/guias', [GuiaController::class, 'index'])->name('guias.index');
    Route::get('/guias/create', [GuiaController::class, 'create'])->name('guias.create');
    Route::post('/guias/store', [GuiaController::class, 'store'])->name('guias.store');
    Route::get('/guias/edit/{guia}', [GuiaController::class, 'edit'])->name('guias.edit');
    Route::patch('/guias/update/{guia}', [GuiaController::class, 'update'])->name('guias.update');
    Route::delete('/guias/{guia}', [GuiaController::class, 'destroy'])->name('guias.destroy');
    Route::get('guias/search', [GuiaController::class, 'search'])->name('guias.search');});

//Ruta de Horario de los guias
Route::middleware('auth')->group(function () {
    Route::get('/horario_guias', [Horario_guiaController::class, 'index'])->name('horario_guias.index');
    Route::get('/horario_guias/create', [Horario_guiaController::class, 'create'])->name('horario_guias.create');
    Route::post('/horario_guias/store', [Horario_guiaController::class, 'store'])->name('horario_guias.store');
    Route::get('/horario_guias/edit/{horario_guia}', [Horario_guiaController::class, 'edit'])->name('horario_guias.edit');
    Route::patch('/horario_guias/update/{horario_guia}', [Horario_guiaController::class, 'update'])->name('horario_guias.update');
    Route::delete('/horario_guias/{horario_guia}', [Horario_guiaController::class, 'destroy'])->name('horario_guias.destroy');
    Route::get('horario_guias/search', [Horario_guiaController::class, 'search'])->name('horario_guias.search');});

//Ruta de Itinerario
Route::middleware('auth')->group(function () {
    Route::get('/itinerarios', [ItinerarioController::class, 'index'])->name('itinerarios.index');
    Route::get('/itinerarios/create', [ItinerarioController::class, 'create'])->name('itinerarios.create');
    Route::post('/itinerarios/store', [ItinerarioController::class, 'store'])->name('itinerarios.store');
    Route::get('/itinerarios/edit/{itinerario}', [ItinerarioController::class, 'edit'])->name('itinerarios.edit');
    Route::patch('/itinerarios/update/{itinerario}', [ItinerarioController::class, 'update'])->name('itinerarios.update');
    Route::delete('/itinerarios/{itinerario}', [ItinerarioController::class, 'destroy'])->name('itinerarios.destroy');
    Route::get('itinerarios/search', [ItinerarioController::class, 'search'])->name('itinerarios.search');});

//Ruta de Zonas
Route::middleware('auth')->group(function () {
    Route::get('/zonas', [ZonaController::class, 'index'])->name('zonas.index');
    Route::get('/zonas/create', [ZonaController::class, 'create'])->name('zonas.create');
    Route::post('/zonas/store', [ZonaController::class, 'store'])->name('zonas.store');
    Route::get('/zonas/edit/{zona}', [ZonaController::class, 'edit'])->name('zonas.edit');
    Route::patch('/zonas/update/{zona}', [ZonaController::class, 'update'])->name('zonas.update');
    Route::delete('/zonas/{zona}', [ZonaController::class, 'destroy'])->name('zonas.destroy');
    Route::get('zonas/search', [ZonaController::class, 'search'])->name('zonas.search');});


//Ruta de Cuidadores
Route::middleware('auth')->group(function () {
    Route::get('/cuidadors', [CuidadorController::class, 'index'])->name('cuidadors.index');
    Route::get('/cuidadors/create', [CuidadorController::class, 'create'])->name('cuidadors.create');
    Route::post('/cuidadors/store', [CuidadorController::class, 'store'])->name('cuidadors.store');
    Route::get('/cuidadors/edit/{cuidador}', [CuidadorController::class, 'edit'])->name('cuidadors.edit');
    Route::patch('/cuidadors/update/{cuidador}', [CuidadorController::class, 'update'])->name('cuidadors.update');
    Route::delete('/cuidadors/{cuidador}', [CuidadorController::class, 'destroy'])->name('cuidadors.destroy');
    Route::get('cuidadors/search', [CuidadorController::class, 'search'])->name('cuidadors.search');});

//Ruta de Horarios de Cuidadores
Route::middleware('auth')->group(function () {
    Route::get('/horario_cuidadors', [Horario_cuidadorController::class, 'index'])->name('horario_cuidadors.index');
    Route::get('/horario_cuidadors/create', [Horario_cuidadorController::class, 'create'])->name('horario_cuidadors.create');
    Route::post('/horario_cuidadors/store', [Horario_cuidadorController::class, 'store'])->name('horario_cuidadors.store');
    Route::get('/horario_cuidadors/edit/{horario_cuidador}', [Horario_cuidadorController::class, 'edit'])->name('horario_cuidadors.edit');
    Route::patch('/horario_cuidadors/update/{horario_cuidador}', [Horario_cuidadorController::class, 'update'])->name('horario_cuidadors.update');
    Route::delete('/horario_cuidadors/{horario_cuidador}', [Horario_cuidadorController::class, 'destroy'])->name('horario_cuidadors.destroy');
    Route::get('horario_cuidadors/search', [Horario_cuidadorController::class, 'search'])->name('horario_cuidadors.search');});

//Ruta de Horarios de especies
Route::middleware('auth')->group(function () {
    Route::get('/especies', [EspecieController::class, 'index'])->name('especies.index');
    Route::get('/especies/create', [EspecieController::class, 'create'])->name('especies.create');
    Route::post('/especies/store', [EspecieController::class, 'store'])->name('especies.store');
    Route::get('/especies/edit/{especie}', [EspecieController::class, 'edit'])->name('especies.edit');
    Route::patch('/especies/update/{especie}', [EspecieController::class, 'update'])->name('especies.update');
    Route::delete('/especies/{especie}', [EspecieController::class, 'destroy'])->name('especies.destroy');
    Route::get('especies/search', [EspecieController::class, 'search'])->name('especies.search');});

//Ruta de Horarios de especies
Route::middleware('auth')->group(function () {
    Route::get('/habitats', [HabitatController::class, 'index'])->name('habitats.index');
    Route::get('/habitats/create', [HabitatController::class, 'create'])->name('habitats.create');
    Route::post('/habitats/store', [HabitatController::class, 'store'])->name('habitats.store');
    Route::get('/habitats/edit/{habitat}', [HabitatController::class, 'edit'])->name('habitats.edit');
    Route::patch('/habitats/update/{habitat}', [HabitatController::class, 'update'])->name('habitats.update');
    Route::delete('/habitats/{habitat}', [HabitatController::class, 'destroy'])->name('habitats.destroy');
    Route::get('habitats/search', [HabitatController::class, 'search'])->name('habitats.search');});

//Ruta de Horarios de especies
Route::middleware('auth')->group(function () {
    Route::get('/recorridos', [RecorridoController::class, 'index'])->name('recorridos.index');
    Route::get('/recorridos/create', [RecorridoController::class, 'create'])->name('recorridos.create');
    Route::post('/recorridos/store', [RecorridoController::class, 'store'])->name('recorridos.store');
    Route::get('/recorridos/edit/{recorrido}', [RecorridoController::class, 'edit'])->name('recorridos.edit');
    Route::patch('/recorridos/update/{recorrido}', [RecorridoController::class, 'update'])->name('recorridos.update');
    Route::delete('/recorridos/{recorrido}', [RecorridoController::class, 'destroy'])->name('recorridos.destroy');
    Route::get('recorridos/search', [RecorridoController::class, 'search'])->name('recorridos.search');});

    require __DIR__.'/auth.php';
