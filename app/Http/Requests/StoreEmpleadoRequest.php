<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreEmpleadoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
     public function rules()
{
    return [
        'nombre' => ['required','min:2'],
        'apellido_p' => ['required','min:2'],
        'apellido_m' => ['required','min:2'],
        'telefono' => ['required','digits:10'],
        'direccion' => ['required','min:2'],
        'fecha_ingreso' => ['required','date'],
        'tipo_empleado' => ['required', Rule::in(['guia','cuidador'])],
    ];
}
}
