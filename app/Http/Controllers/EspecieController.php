<?php

namespace App\Http\Controllers;
use App\Http\Requests\UpdateEspecieRequest;
use App\Models\Especie;
use App\Models\Horario_cuidador;
use App\Models\Cuidador;
use App\Http\Requests\StoreEspecieRequest;
use Illuminate\Http\Request;

class EspecieController extends Controller
{
    public function index()
    {
        $especies = Especie::with(['cuidador','horario_cuidador'])->get();
        return view('especies.index', compact('especies'));
    }

    public function create()

    {   $horario_cuidadors = Horario_cuidador::all();
        $cuidadors = Cuidador::all();

        return view('especies.create', compact('cuidadors','horario_cuidadors'));
    }

    public function store(StoreEspecieRequest $request)
    {
        Especie::create($request->validated());
        return redirect()->route('especies.index')->with('success', 'Especie guardado exitosamente');
    }

    public function edit(Especie $especie)
    {
        $cuidadors = Cuidador::all();
        $horario_cuidadors = Horario_cuidador::all();

        return view('especies.edit', compact('especie', 'cuidadors','horario_cuidadors'));
    }

    public function update(UpdateEspecieRequest $request, Especie $especie)
    {
        $especie->update($request->validated());
        return redirect()->route('especies.index')->with('success', 'Especie actualizado correctamente');
    }

    public function destroy(Especie $especies)
    {
        $especies->delete();
        return redirect()->route('especies.index')->with('success', 'Especie eliminado');
    }

    public function search(Request $request)
{
    $campo = $request->input('campo');
    $filtro = $request->input('filtro');

    $especies = collect();

    if ($campo && $filtro) {
        $especies = Especie::with('cuidador.empleado','horario_cuidador')
            ->when($campo === 'cuidador', fn($q) =>
                $q->whereHas('cuidador.empleado', fn($p) =>
                    $p->where('nombre', 'like', "%$filtro%")
                      ->orWhere('apellido_p', 'like', "%$filtro%")
                      ->orWhere('apellido_m', 'like', "%$filtro%")
                )
            )
            ->when($campo === 'nombre', fn($q) =>
                $q->where('nombre', 'like', "%$filtro%")
            )

            ->when($campo === 'nombre_cientifico', fn($q) =>
                $q->where('nombre_cientifico', 'like', "%$filtro%")
            )

            ->when($campo === 'duracion', fn($q) =>
                $q->where('duracion', 'like', "%$filtro%")
            )
            ->when($campo === 'descripcion', fn($q) =>
                $q->where('descripcion', $filtro)
            )

            ->get();
    }

    return view('especies.search', compact('especies', 'campo', 'filtro'));
}
}