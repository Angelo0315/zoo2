<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreItinerarioRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'id_horario_guia' => 'required|exists:horario_guias,id',
            'id_guia' => 'required|exists:guias,id',
            'fecha' => 'required|date',
            'duracion' => 'required|integer',
            'longitud' => 'required|numeric|min:0.01',
            'cantidad_especies' => 'required|integer|min:0|max:255',
            'cantidad_personas' => 'required|integer|min:0|max:255'

        ];
    }
}
