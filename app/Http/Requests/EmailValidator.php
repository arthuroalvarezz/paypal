<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmailValidator extends FormRequest
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
            'nombre' => 'required|min:3|max:30',
            'email' => 'required|email',
            'asunto' => 'nullable|max:20',
            'mensaje' => 'required|max:250',
            'status' => 'required|between:0,1'
        ];
    }

    public function messages()
    {
      return [
        'nombre.required' => "Favor de colocar un nombre",
        'nombre.min' => "El nombre debe ser mayor a 3 caracteres",
        'nombre. alpha' => "El nombre no puede contener caracteres especiales y números",
        'email.email' => "El correo electrónico introducido no cuenta con el formato requerido",
        'email.required' => "Favor de colocar un correo electrónico",
        'mensaje.required' => "Favor de colocar un mensaje",
        'mensaje.max' => "El mansaje es demaciado largo",
        'asunto.required' => "Favor de colocar un asunto",
        'status.required' => "Error, vuelva a cargar la página",
        'status.between' => "Error, vuelva a cargar la página"
      ];
    }
}
