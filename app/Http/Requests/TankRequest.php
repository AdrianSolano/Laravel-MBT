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
       {
           return [
               'name'          => 'required|min:2',
               'event'         =>  'required|exists:event,id',
               'ammo'          => ['required','exists:ammo,id'],
               'nation'        => 'required','min:2',
               'description'   => 'required'
           ];
       }

       public function messages()
       {
           return [
               'name.required'=> 'El :attribute es requerido.',
               'name.min' => 'El :attribute debe tener al menos 2 caracteres',
               'event.required' => 'La :attribute es requerido',
               'event.exists' => 'Debe introducir un :attribute válido.',
               'ammo.required'=> 'El :attribute es requerido.',
               'ammo.exists'    => 'Debe introducir un :attribute ya registrado.',
               'nation.required'=> 'El :attribute es requerido.',
               'nation.min'    => 'El :attribute debe tener al menos 2 caracteres',
               'description.required'=> 'La :attribute es requerida.',
           ];
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
