<?php

namespace App\Http\Controllers;

use App\Models\Habitat;
use App\Models\Especie;
use App\Http\Requests\StoreHabitatRequest;
use App\Http\Requests\UpdateHabitatRequest;
use Illuminate\Http\Request;

class HabitatController extends Controller
{
    public function index()
    {
        $habitats = Habitat::with('especie')->get();
        return view('habitats.index', compact('habitats'));
    }

    public function create()
    {
        $especies = Especie::all();
        return view('habitats.create', compact('especies'));
    }

    public function store(StoreHabitatRequest $request)
    {
        Habitat::create($request->validated());
        return redirect()->route('habitats.index')->with('success', 'habitat guardado exitosamente');
    }

    public function edit(Habitat $habitat)
    {
        $especies = Especie::all();
        return view('habitats.edit', compact('habitat', 'especies'));
    }

    public function update(UpdateHabitatRequest $request, Habitat $habitat)
    {
        $habitat->update($request->validated());
        return redirect()->route('habitats.index')->with('success', 'habitat actualizado correctamente');
    }

    public function destroy(Habitat $habitat)
    {
        $habitat->delete();
        return redirect()->route('habitats.index')->with('success', 'Habitat eliminado');
    }

    public function search(Request $request){
    $campo = $request->input('campo');
    $filtro = $request->input('filtro');

    $habitats = collect();

    if ($campo && $filtro) {
    $habitats = Habitat::with('especie.horario_cuidador.cuidador')
        ->when($campo === 'especie', fn($q) =>
            $q->whereHas('especie', fn($p) =>
                $p->where('id_cuidador', 'like', "%$filtro%")
                  ->orWhere('id_horario_cuidador', 'like', "%$filtro%")
                  ->orWhere('nombre', 'like', "%$filtro%")
                  ->orWhere('nombre_cientifico', 'like', "%$filtro%")
                  ->orWhere('descripcion', 'like', "%$filtro%")
            )
        )
        ->when($campo === 'clima', fn($q) =>
            $q->where('clima', 'like', "%$filtro%")
        )
        
        ->when($campo === 'extension', fn($q) =>
            $q->where('extension', $filtro)
        )

        ->when($campo === 'descripcion', fn($q) =>
            $q->where('descripcion', $filtro)
        )

        ->get();
    }

return view('habitats.search', compact('habitats', 'campo', 'filtro'));
    }
}