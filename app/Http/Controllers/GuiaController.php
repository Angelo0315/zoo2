<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Guia;
use App\Http\Requests\StoreGuiaRequest;
use App\Http\Requests\UpdateGuiaRequest;
use Illuminate\Http\Request;

class GuiaController extends Controller
{
    public function index()
    {
        $guias = Guia::with('empleado')->get();
        return view('guias.index', compact('guias'));
    }

    public function create()
    {
        $empleados = Empleado::where('tipo_empleado','guia')->get();
        return view('guias.create', compact('empleados'));
    }

    public function store(StoreGuiaRequest $request)
    {
        Guia::create($request->validated());
        return redirect()->route('guias.index')->with('success', 'Guía guardado exitosamente');
    }

    public function edit(Guia $guia)
    {
        $empleados = Empleado::where('tipo_empleado','guia')->get();
        return view('guias.edit', compact('guia', 'empleados'));
    }

    public function update(UpdateGuiaRequest $request, Guia $guia)
    {
        $guia->update($request->validated());
        return redirect()->route('guias.index')->with('success', 'Guía actualizado correctamente');
    }

    public function destroy(Guia $guia)
    {
        $guia->delete();
        return redirect()->route('guias.index')->with('success', 'Guía eliminado');
    }

    public function search(Request $request){
    $campo = $request->input('campo');
    $filtro = $request->input('filtro');

    $guias = collect(); // empieza vacío

    if ($campo && $filtro) {
        $guias = Guia::with('empleado')
            ->when($campo === 'empleado', fn($q) =>
                $q->whereHas('empleado', fn($p) =>
                    $p->where('nombre', 'like', "%$filtro%")
                      ->orWhere('apellido_p', 'like', "%$filtro%")
                      ->orWhere('apellido_m', 'like', "%$filtro%")
                )
            )
            ->when($campo === 'fecha_ingreso', fn($q) =>
                $q->where('fecha_ingreso', 'like', "%$filtro%")
            )
            ->get();
    }

    return view('guias.search', compact('guias', 'campo', 'filtro'));
}
}