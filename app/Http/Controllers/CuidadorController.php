<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Cuidador;
use App\Http\Requests\StoreGuiaRequest;
use App\Http\Requests\UpdateGuiaRequest;
use Illuminate\Http\Request;

class CuidadorController extends Controller
{
    public function index()
    {
        $cuidadors = Cuidador::with('empleado')->get();
        return view('cuidadors.index', compact('cuidadors'));
    }

    public function create()
    {
        $empleados = Empleado::where('tipo_empleado','cuidador')->get();
        return view('cuidadors.create', compact('empleados'));
    }

    public function store(StoreGuiaRequest $request)
    {
        Cuidador::create($request->validated());
        return redirect()->route('cuidadors.index')->with('success', 'Cuidador guardado exitosamente');
    }

    public function edit(Cuidador $cuidador)
    {
        $empleados = Empleado::where('tipo_empleado','cuidador')->get();
        return view('cuidadors.edit', compact('cuidador', 'empleados'));
    }

    public function update(UpdateGuiaRequest $request,  Cuidador $cuidador)
    {
        $cuidador->update($request->validated());
        return redirect()->route('cuidadors.index')->with('success', 'Cuidador actualizado correctamente');
    }

    public function destroy(Cuidador $cuidador)
    {
        $cuidador->delete();
        return redirect()->route('cuidadors.index')->with('success', 'Cuidador eliminado');
    }

    public function search(Request $request){
    $campo = $request->input('campo');
    $filtro = $request->input('filtro');

    $cuidadors = collect(); // empieza vacío

    if ($campo && $filtro) {
        $cuidadors = Cuidador::with('empleado')
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

    return view('cuidadors.search', compact('cuidadors', 'campo', 'filtro'));
}
}