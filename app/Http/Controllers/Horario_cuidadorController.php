<?php

namespace App\Http\Controllers;

use App\Models\Horario_cuidador;
use App\Models\Cuidador;
use App\Http\Requests\StoreHorario_cuidadorRequest;
use App\Http\Requests\UpdateHorario_cuidadorRequest;
use Illuminate\Http\Request;

class Horario_cuidadorController extends Controller
{
    public function index()
    {
        $horario_cuidadors = Horario_cuidador::with('cuidador')->get();
        return view('horario_cuidadors.index', compact('horario_cuidadors'));
    }

    public function create()
    {
        $cuidadors = Cuidador::all();
        return view('horario_cuidadors.create', compact('cuidadors'));
    }

    public function store(StoreHorario_cuidadorRequest $request)
    {
        Horario_cuidador::create($request->validated());
        return redirect()->route('horario_cuidadors.index')->with('success', 'Horario guardado exitosamente');
    }

    public function edit(Horario_cuidador $horario_cuidador)
    {
        $cuidadors = Cuidador::all();
        return view('horario_cuidadors.edit', compact('horario_cuidador', 'cuidadors'));
    }

    public function update(UpdateHorario_cuidadorRequest $request, Horario_cuidador $horario_cuidador)
    {
        $horario_cuidador->update($request->validated());
        return redirect()->route('horario_cuidadors.index')->with('success', 'Horario actualizado correctamente');
    }

    public function destroy(Horario_cuidador $horario_cuidador)
    {
        $horario_cuidador->delete();
        return redirect()->route('horario_cuidadors.index')->with('success', 'Horario eliminado');
    }

    public function search(Request $request){
    $campo = $request->input('campo');
    $filtro = $request->input('filtro');

    $horario_cuidadors = collect();

    if ($campo && $filtro) {
    $horario_cuidadors = Horario_cuidador::with('cuidador')
        ->when($campo === 'cuidador', fn($q) =>
            $q->whereHas('cuidador.empleado', fn($p) =>
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

return view('horario_cuidadors.search', compact('horario_cuidadors', 'campo', 'filtro'));
    }
}