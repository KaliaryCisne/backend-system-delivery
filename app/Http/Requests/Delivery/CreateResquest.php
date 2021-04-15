<?php

namespace App\Http\Requests\Delivery;

use Illuminate\Foundation\Http\FormRequest;

class CreateResquest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'client_name'              => 'required|max:255|string',
            'delivery_date'            => 'required|date',
            'starting_coordinate'      => 'required|string',
            'destination_coordinate'   => 'required|string'
        ];
    }

    public function messages()
    {
        return [
            'required'  => 'Campo :attribute é obrigatório',
            'string'    => 'Campo :attribute deve ser uma string',
            'max'       => 'Campp :attribute deve ter no máximo :max caracteres',
            'date'      => 'Campo :attribute deve ser uma data',
        ];
    }
}
