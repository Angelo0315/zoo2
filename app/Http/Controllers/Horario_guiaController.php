<?php

namespace App\Http\Controllers;

use App\Models\Horario_guia;
use App\Models\Guia;
use App\Http\Requests\StoreHorario_guiaRequest;
use App\Http\Requests\UpdateHorario_guiaRequest;
use Illuminate\Http\Request;

class Horario_guiaController extends Controller
{
    public function index()
    {
        $horario_guias = Horario_guia::with('guia.empleado')->get();
        return view('horario_guias.index', compact('horario_guias'));
    }

    public function create()
    {
        $guias = Guia::all();
        return view('horario_guias.create', compact('guias'));
    }

    public function store(StoreHorario_guiaRequest $request)
    {
        Horario_guia::create($request->validated());
        return redirect()->route('horario_guias.index')->with('success', 'Horario guardado exitosamente');
    }

    public function edit(Horario_guia $horario_guia)
    {
        $guias = Guia::all();
        return view('horario_guias.edit', compact('horario_guia', 'guias'));
    }

    public function update(UpdateHorario_guiaRequest $request, Horario_guia $horario_guia)
    {
        $horario_guia->update($request->validated());
        return redirect()->route('horario_guias.index')->with('success', 'Horario actualizado correctamente');
    }

    public function destroy(Horario_guia $horario_guia)
    {
        $horario_guia->delete();
        return redirect()->route('horario_guias.index')->with('success', 'Horario eliminado');
    }

    public function search(Request $request){
    $campo = $request->input('campo');
    $filtro = $request->input('filtro');

    $horario_guias = collect();

    if ($campo && $filtro) {
    $horario_guias = Horario_guia::with('guia')
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
        
        ->when($campo === 'hora_entrada', fn($q) =>
            $q->whereTime('hora_entrada', $filtro)
        )


        ->when($campo === 'hora_salida', fn($q) =>
            $q->whereTime('hora_salida', $filtro)
        )



        ->get();
    }

    return view('horario_guias.search', compact('horario_guias', 'campo', 'filtro'));
}
}