<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEspecieRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array {
    return [
        'id_horario_cuidador' => 'required|exists:horario_cuidadors,id',
        'id_cuidador' => 'required|exists:cuidadors,id',
        'nombre' => 'required|string|min:2',
        'nombre_cientifico' => 'required|string|min:3',
        'descripcion' => 'required|string|min:5',
    ];
}

}

