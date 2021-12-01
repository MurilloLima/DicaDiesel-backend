<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ModeloRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:modelos',
            'ref' => 'required',
            'marca_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Infome o nome do Modelo.',
            'name.unique' => 'Este Modelo já foi cadastrado',
            'ref.required' => 'Informe a referência do Modelo.',
            'marca_id.required' => 'Escolha a Marca.'
        ];
        
    }
}
