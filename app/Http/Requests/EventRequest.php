<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
        $rules = array();

        $rules['nameEvent'] = $this->validarNombre();
        $rules['year'] = $this->validarYear();
        $rules['description'] = $this->validarDescripcion();

        return $rules;
    }

    public function messages()
    {   
        $mensajesNombre = $this->mensajesNombre();
        $mensajesYear = $this->mensajesYear();
        $mensajesDescripcion = $this->mensajesDescripcion();

        $mensajes = array_merge(
            $mensajesNombre,
            $mensajesDescripcion,
            $mensajesYear
        );

        return $mensajes;
        /* return [
            'nameEvent.required'        =>  'El :attribute es requerido',
            'nameEvent.min'             =>  'El :attribute debe tener al menos 2 caracteres',
            'year.required'             =>  'El :attribute es requerido',
            'description.required'      =>  'El :attribute es requerido',
            'description.min'           => 'El :attribute debe tener al menos 15 caracteres'
        ]; */
    }
    protected function validarNombre()
    {
        return 'required|string|min:2|max:10';
    }

    protected function validarYear()
    {
        return 'required|string|min:2|max:3';
    }

    protected function validarDescripcion()
    {
        return 'required|string';
    }

    protected function mensajesNombre()
    {
        $mensajes = array();

        $mensajes["nameEvent.required"] = 'El :attribute es requerido.';
        $mensajes["nameEvent.string"] = 'Introduzca una cadena de texto';
        $mensajes["nameEvent.max"] = 'El :attribute debe tener menos 10 caracteres';
        $mensajes["nameEvent.min"] = 'El :attribute debe tener al menos 2 caracteres';

        return $mensajes;
    }

    protected function mensajesYear()
    {
        $mensajes = array();

        $mensajes["year.required"] = 'La :attribute es requerido';
        $mensajes["year.exists"] = 'Debe introducir un :attribute válido';
        $mensajes["year.min"] = 'El :attribute debe tener al menos 2 caracteres';
        $mensajes["year.max"] = 'El :attribute debe tener al menos 10 caracteres';

        return $mensajes;
    }

    protected function mensajesDescripcion()
    {
        $mensajes = array();

        $mensajes["description.required"] = 'La :attribute es requerido';
        $mensajes["description.string"] = 'Introduzca una cadena de texto';

        return $mensajes;
    }
}
