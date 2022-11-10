<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SecuritiesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'fatherlastname' => 'required',
            'motherlastname' => 'required',
            'age' => 'required|integer|between:18,100',
            'colony' => 'required',
            'street1' => 'required',
            'area' => 'required',
            'problem' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre es obligatorio',
            'fatherlastname.required' => 'El Apellido Paterno es obligatorio',
            'motherlastname.required' => 'El Apellido Materno es obligatorio',
            'phonenumber.required' => 'El Teléfono es obligatorio',
            'age.required' => 'La Edad es obligatoria',
            'age.between' => 'La Edad debe ser entre 18 y 100 años',
            'colony.required' => 'La Colonia es obligatoria',
            'street1.required' => 'La Calle 1 es obligatorio',
            'area.required' => 'El área es obligatorio',
            'problem.required' => 'El problema es obligatorio'
        ];
    }
}
