<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Http\Requests\StoreEmpleadoRequest;
use App\Http\Requests\UpdateEmpleadoRequest;
use DB;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{

    public function index()
    {
        $empleados=Empleado::get();

        return view('empleados.index',['empleados' => $empleados]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    return view('empleados.create', ['empleado' => new Empleado]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmpleadoRequest $request)
    {
        $request->validate([
            'nombre' => ['required','min:2'],
            'apellido_p' => ['required','min:2'],
            'apellido_m' => ['required','min:2'],
            'telefono' => ['required','digits:10'],
            'direccion' => ['required','min:2'],
            'fecha_ingreso' => ['required','date'],
            'tipo_empleado' => ['required', Rule::in(['guia','cuidador'])]
        ]);

        Empleado::create([
            'nombre' => $request->input('nombre'),
            'apellido_p' => $request->input('apellido_p'),
            'apellido_m' => $request->input('apellido_m'),
            'telefono' => $request->input('telefono'),
            'direccion' => $request->input('direccion'),
            'fecha_ingreso' => $request->input('fecha_ingreso'),
            'tipo_empleado' => $request->input('tipo_empleado')
        ]);

        session()->flash('status','Registrar Empleado con Exito.');

        return to_route('empleados.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empleado $empleado)
    {
        return view('empleados.edit',['empleado' => $empleado]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmpleadoRequest $request, Empleado $empleado)
    {
        try {
            $request->validate([
                'nombre' => ['required','min:2'],
                'apellido_p' => ['required','min:2'],
                'apellido_m' => ['required','min:2'],
                'telefono' => ['required','digits:10'],
                'direccion' => ['required','min:2'],
                'fecha_ingreso' => ['required','date'],
                'tipo_empleado' => ['required', Rule::in(['guia','cuidador'])]
            ]);

            $empleado->update([
                'nombre' => $request->input('nombre'),
                'apellido_p' => $request->input('apellido_p'),
                'apellido_m' => $request->input('apellido_m'),
                'telefono' => $request->input('telefono'),
                'direccion' => $request->input('direccion'),
                'fecha_ingreso' => $request->input('fecha_ingreso'),
                'tipo_empleado' => $request->input('tipo_empleado'),
                'updated_at' =>now()
            ]);

            return redirect()->route('empleados.index')->with('success', 'Empleado Actualizado Correctamente');

        }

        catch (\Exception $e){
            return redirect()->route('empleados.index')->with('error', 'Error al Actualizar: ' . $e->getMessage());
        }        
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empleado $empleado)
    {
        $empleado->delete();
            return to_route('empleados.index');
    }

    public function search(Request $request)
    {
        $empleados=[];

        if ($request->input('busqueda') == "nombre") {
            $empleados = DB::table('empleados')
                ->where('empleados.nombre','like','%' . $request->input('nombre') . '%')
                ->orderby('empleados.nombre','asc')
                ->orderby('empleados.apellido_p','asc')
                ->orderby('empleados.apellido_m','asc')
                ->orderby('empleados.telefono','asc')
                ->orderby('empleados.direccion','asc')
                ->orderby('empleados.fecha_ingreso','asc')
                ->orderby('empleados.tipo_empleado','asc')
                ->get();
            }   

            if ($request->input('busqueda') == "apellido_p") {
                $empleados = DB::table('empleados')
                ->where('empleados.apellido_p','like','%' . $request->input('nombre') . '%')
                ->orderby('empleados.nombre','asc')
                ->orderby('empleados.apellido_p','asc')
                ->orderby('empleados.apellido_m','asc')
                ->orderby('empleados.telefono','asc')
                ->orderby('empleados.direccion','asc')
                ->orderby('empleados.fecha_ingreso','asc')
                ->orderby('empleados.tipo_empleado','asc')
                ->get();
            }
            
            if ($request->input('busqueda') == "apellido_m") {
                $empleados = DB::table('empleados')
                ->where('empleados.apellido_m','like','%' . $request->input('nombre') . '%')
                ->orderby('empleados.nombre','asc')
                ->orderby('empleados.apellido_p','asc')
                ->orderby('empleados.apellido_m','asc')
                ->orderby('empleados.telefono','asc')
                ->orderby('empleados.direccion','asc')
                ->orderby('empleados.fecha_ingreso','asc')
                ->orderby('empleados.tipo_empleado','asc')
                ->get();
            }

            if ($request->input('busqueda') == "telefono") {
                $empleados = DB::table('empleados')
                ->where('empleados.telefono','like','%' . $request->input('nombre') . '%')
                ->orderby('empleados.nombre','asc')
                ->orderby('empleados.apellido_p','asc')
                ->orderby('empleados.apellido_m','asc')
                ->orderby('empleados.telefono','asc')
                ->orderby('empleados.direccion','asc')
                ->orderby('empleados.fecha_ingreso','asc')
                ->orderby('empleados.tipo_empleado','asc')
                ->get();
            }

            if ($request->input('busqueda') == "direccion") {
                $empleados = DB::table('empleados')
                ->where('empleados.direccion','like','%' . $request->input('nombre') . '%')
                ->orderby('empleados.nombre','asc')
                ->orderby('empleados.apellido_p','asc')
                ->orderby('empleados.apellido_m','asc')
                ->orderby('empleados.telefono','asc')
                ->orderby('empleados.direccion','asc')
                ->orderby('empleados.fecha_ingreso','asc')
                ->orderby('empleados.tipo_empleado','asc')
                ->get();
            }

            if ($request->input('busqueda') == "fecha_ingreso") {
                $empleados = DB::table('empleados')
                ->where('empleados.fecha_ingreso','like','%' . $request->input('nombre') . '%')
                ->orderby('empleados.nombre','asc')
                ->orderby('empleados.apellido_p','asc')
                ->orderby('empleados.apellido_m','asc')
                ->orderby('empleados.telefono','asc')
                ->orderby('empleados.direccion','asc')
                ->orderby('empleados.fecha_ingreso','asc')
                ->orderby('empleados.tipo_empleado','asc')
                ->get();
            }

            if ($request->input('busqueda') == "tipo_empleado") {
                $empleados = DB::table('empleados')
                ->where('empleados.tipo_empleado','like','%' . $request->input('nombre') . '%')
                ->orderby('empleados.nombre','asc')
                ->orderby('empleados.apellido_p','asc')
                ->orderby('empleados.apellido_m','asc')
                ->orderby('empleados.telefono','asc')
                ->orderby('empleados.direccion','asc')
                ->orderby('empleados.fecha_ingreso','asc')
                ->orderby('empleados.tipo_empleado','asc')
                ->get();
            }

            return view('empleados.search',['empleados' => $empleados]);
    }
}
