<?php

namespace App\Http\Controllers;
use App\Http\Requests\UpdateItinerarioRequest;
use App\Models\Itinerario;
use App\Models\Horario_guia;
use App\Models\Guia;
use App\Http\Requests\StoreItinerarioRequest;
use Illuminate\Http\Request;

class ItinerarioController extends Controller
{
    public function index()
    {
        $itinerarios = Itinerario::with(['guia','horario_guia'])->get();
        return view('itinerarios.index', compact('itinerarios'));
    }

    public function create()

    {   $horario_guias = Horario_guia::all();
        $guias = Guia::all();

        return view('itinerarios.create', compact('guias','horario_guias'));
    }

    public function store(StoreItinerarioRequest $request)
    {
        Itinerario::create($request->validated());
        return redirect()->route('itinerarios.index')->with('success', 'Itinerario guardado exitosamente');
    }

    public function edit(Itinerario $itinerario)
    {
        $guias = Guia::all();
        $horario_guias = Horario_guia::all();

        return view('itinerarios.edit', compact('itinerario', 'guias','horario_guias'));
    }

    public function update(UpdateItinerarioRequest $request, Itinerario $itinerario)
    {
        $itinerario->update($request->validated());
        return redirect()->route('itinerarios.index')->with('success', 'Itinerario actualizado correctamente');
    }

    public function destroy(Itinerario $itinerario)
    {
        $itinerario->delete();
        return redirect()->route('itinerarios.index')->with('success', 'Itinerario eliminado');
    }

    public function search(Request $request)
{
    $campo = $request->input('campo');
    $filtro = $request->input('filtro');

    $itinerarios = collect();

    if ($campo && $filtro) {
        $itinerarios = Itinerario::with('guia.empleado','horario_guia')
            ->when($campo === 'guia', fn($q) =>
                $q->whereHas('guia.empleado', fn($p) =>
                    $p->where('nombre', 'like', "%$filtro%")
                      ->orWhere('apellido_p', 'like', "%$filtro%")
                      ->orWhere('apellido_m', 'like', "%$filtro%")
                )
            )
            ->when($campo === 'fecha', fn($q) =>
                $q->where('fecha', 'like', "%$filtro%")
            )

            ->when($campo === 'longitud', fn($q) =>
                $q->where('longitud', 'like', "%$filtro%")
            )

            ->when($campo === 'duracion', fn($q) =>
                $q->where('duracion', 'like', "%$filtro%")
            )
            ->when($campo === 'cantidad_personas', fn($q) =>
                $q->where('cantidad_personas', $filtro)
            )
             ->when($campo === 'cantidad_especies', fn($q) =>
                $q->where('cantidad_especies', $filtro)
            )

            ->get();
    }

    return view('itinerarios.search', compact('itinerarios', 'campo', 'filtro'));
}
}