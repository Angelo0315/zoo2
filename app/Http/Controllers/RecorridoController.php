<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recorrido;
use App\Models\Habitat;
use App\Models\Zona;
use App\Models\Especie;
use App\Http\Requests\StoreRecorridoRequest;
use App\Http\Requests\UpdateRecorridoRequest;

class RecorridoController extends Controller
{
    public function index()
    {
        $recorridos = Recorrido::with(['habitat', 'zona', 'especie'])->get();
        return view('recorridos.index', compact('recorridos'));
    }

    public function create()
    {
        $habitats = Habitat::all();
        $zonas = Zona::all();
        $especies = Especie::all();
        return view('recorridos.create', compact('habitats', 'zonas', 'especies'));
    }

    public function store(StoreRecorridoRequest $request)
    {
        Recorrido::create($request->validated());
        return redirect()->route('recorridos.index')->with('success', 'Recorrido guardado exitosamente');
    }

    public function edit(Recorrido $recorrido)
    {
        $habitats = Habitat::all();
        $zonas = Zona::all();
        $especies = Especie::all();
        return view('recorridos.edit', compact('recorrido', 'habitats', 'zonas', 'especies'));
    }

    public function update(UpdateRecorridoRequest $request, Recorrido $recorrido)
    {
        $recorrido->update($request->validated());
        return redirect()->route('recorridos.index')->with('success', 'Recorrido actualizado correctamente');
    }

    public function destroy(Recorrido $recorrido)
    {
        $recorrido->delete();
        return redirect()->route('recorridos.index')->with('success', 'Recorrido eliminado');
    }

    public function search(Request $request)
{
    $campo = $request->input('campo');
    $filtro = $request->input('filtro');

    $recorridos = Recorrido::with(['especie', 'habitat', 'zona'])
        ->when($campo === 'especie', fn($q) =>
            $q->whereHas('especie', fn($p) =>
                $p->where('nombre', 'like', "%$filtro%")
                  ->orWhere('nombre_cientifico', 'like', "%$filtro%")
                  ->orWhere('descripcion', 'like', "%$filtro%")
            )
        )
        ->when($campo === 'habitat', fn($q) =>
            $q->whereHas('habitat', fn($p) =>
                $p->where('clima', 'like', "%$filtro%")
                  ->orWhere('vegetacion', 'like', "%$filtro%")
                  ->orWhere('continente', 'like', "%$filtro%")
            )
        )
        ->when($campo === 'zona', fn($q) =>
            $q->whereHas('zona', fn($p) =>
                $p->where('nombre', 'like', "%$filtro%")
                  ->orWhere('extension', 'like', "%$filtro%")
            )
        )
        ->get();

    return view('recorridos.search', compact('recorridos', 'campo', 'filtro'));
}
}
