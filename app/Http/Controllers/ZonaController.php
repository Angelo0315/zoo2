<?php

namespace App\Http\Controllers;

use App\Models\Zona;
use App\Models\Itinerario;
use App\Http\Requests\StoreZonaRequest;
use App\Http\Requests\UpdateZonaRequest;
use Illuminate\Http\Request;

class ZonaController extends Controller
{
    public function index()
    {
        $zonas = Zona::with('itinerario')->get();
        return view('zonas.index', compact('zonas'));
    }

    public function create()
    {
        $itinerarios = Itinerario::all();
        return view('zonas.create', compact('itinerarios'));
    }

    public function store(StoreZonaRequest $request)
    {
        Zona::create($request->validated());
        return redirect()->route('zonas.index')->with('success', 'Zona guardada exitosamente');
    }

    public function edit(Zona $zona)
    {
        $itinerarios = Itinerario::all();
        return view('zonas.edit', compact('zona', 'itinerarios'));
    }

    public function update(UpdateZonaRequest $request, Zona $zona)
    {
        $zona->update($request->validated());
        return redirect()->route('zonas.index')->with('success', 'Zona actualizada correctamente');
    }

    public function destroy(Zona $zona)
    {
        $zona->delete();
        return redirect()->route('zonas.index')->with('success', 'Zona eliminada');
    }

    public function search(Request $request){
    $campo = $request->input('campo');
    $filtro = $request->input('filtro');

    $zonas = collect();

    if ($campo && $filtro) {
    $zonas = Zona::with('itinerario.horario_guia.guia')
        ->when($campo === 'itinerario', fn($q) =>
            $q->whereHas('itinerario', fn($p) =>
                $p->where('id_guia', 'like', "%$filtro%")
                  ->orWhere('id_horario_guia', 'like', "%$filtro%")
                  ->orWhere('fecha', 'like', "%$filtro%")
                  ->orWhere('duracion', 'like', "%$filtro%")
                  ->orWhere('cantidad_personas', 'like', "%$filtro%")
                  ->orWhere('cantidad_especies', 'like', "%$filtro%")
            )
        )
        ->when($campo === 'nombre', fn($q) =>
            $q->where('nombre', 'like', "%$filtro%")
        )
        
        ->when($campo === 'extension', fn($q) =>
            $q->where('extension', $filtro)
        )

        ->get();
    }

return view('zonas.search', compact('zonas', 'campo', 'filtro'));
    }
}