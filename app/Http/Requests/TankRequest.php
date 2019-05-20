<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TankRequest extends FormRequest
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
    { //Añadir variables para cada campo.

        $rules = array();

        $rules['name'] = $this->validarNombre();
        $rules['event'] = $this->validarEvento();
        $rules['ammo'] = $this->validarAmmo();
        $rules['nation'] = $this->validarNation();
        $rules['description'] = $this->validarDescripcion();

        return $rules;

        /* return [
            'name'          => 'required|min:2',
            'event'         =>  'required|exists:event,id',
            'ammo'          => ['required', 'exists:ammo,id'],
            'nation'        => 'required', 'min:2',
            'description'   => 'required'
        ]; */
    }

    public function messages()
    {

        $mensajesNombre = $this->mensajesNombre();
        $mensajesEvent = $this->mensajesEvent();
        $mensajesAmmo = $this->mensajesAmmo();
        $mensajesNation = $this->mensajesNation();
        $mensajesDescripcion = $this->mensajesDescripcion();

        $mensajes = array_merge(
            $mensajesNombre,
            $mensajesEvent,
            $mensajesAmmo,
            $mensajesNation,
            $mensajesDescripcion
        );

        return $mensajes;

        /* return [
            'name.required' => 'El :attribute es requerido.',
            'name.min' => 'El :attribute debe tener al menos 2 caracteres',
            'event.required' => 'La :attribute es requerido',
            'event.exists' => 'Debe introducir un :attribute válido.',
            'ammo.required' => 'El :attribute es requerido.',
            'ammo.exists'    => 'Debe introducir un :attribute ya registrado.',
            'nation.required' => 'El :attribute es requerido.',
            'nation.min'    => 'El :attribute debe tener al menos 2 caracteres',
            'description.required' => 'La :attribute es requerida.',
        ]; */
    }

    // Validar <-- -->

    protected function validarNombre()
    {
        return 'required|string|min:2|max:10';
    }

    protected function validarEvento()
    {
        return 'required|string|exists:event,id';
    }

    protected function validarAmmo()
    {
        return 'required|string|exists:ammo,id';
    }

    protected function validarNation()
    {
        return 'required|string|min:2|max:2';
    }

    protected function validarDescripcion()
    {
        return 'required|string';
    }

    //Mensajes <-- -->

    protected function mensajesNombre()
    {
        $mensajes = array();

        $mensajes["name.required"] = 'El :attribute es requerido.';
        $mensajes["name.string"] = 'Introduzca una cadena de texto';
        $mensajes["name.max"] = 'El :attribute debe tener menos 10 caracteres';
        $mensajes["name.min"] = 'El :attribute debe tener al menos 2 caracteres';

        return $mensajes;
    }

    protected function mensajesEvent()
    {
        $mensajes = array();

        $mensajes["event.required"] = 'La :attribute es requerido';
        $mensajes["event.string"] = 'Introduzca una cadena de texto';
        $mensajes["event.exists"] = 'Debe introducir un evento válido';

        return $mensajes;
    }

    protected function mensajesAmmo()
    {
        $mensajes = array();

        $mensajes["ammo.required"] = 'La :attribute es requerido';
        //$mensajes["ammo.string"] = 'Introduzca una cadena de texto';
        $mensajes["ammo.exists"] = 'Debe introducir un :attribute válido';

        return $mensajes;
    }

    protected function mensajesNation()
    {
        $mensajes = array();

        $mensajes["nation.required"] = 'La :attribute es requerido';
        $mensajes["nation.string"] = 'Introduzca una cadena de texto';
        $mensajes["nation.min"] = 'El :attribute debe tener al menos 2 caracteres';
        $mensajes["nation.max"] = 'El :attribute debe tener menos 2 caracteres';

        return $mensajes;
    }

    protected function mensajesDescripcion()
    {
        $mensajes = array();

        $mensajes["description.required"] = 'La :attribute es requerido';
        $mensajes["description.string"] = 'Introduzca una cadena de texto';

        return $mensajes;
    }

    public function attributes()
    {
        return [
            'name'     => 'nombre del tanque',
            'event' => 'evento del tanque',
            'ammo'    => 'municion del tanque',
            'nation'    => 'nacion del tanque',
            'description' => 'descripción del tanque'
        ];
    }
}
