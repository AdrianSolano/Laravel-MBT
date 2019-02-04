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
     // 'name' => request('name'),
     // 'slug' => str_slug(request('name'), "-"),
     // 'nation' => request('nation'),
     // 'crew' => request('crew'),
     // 'hp' => request('hp'),
     // 'ammo' => request('ammo'),
     // 'type' => request('type'),
     // 'mainweapon' => request('mainweapon'),
     // 'secondaryweapon' => request('secondaryweapon'),
     // 'description' => request('description')
     public function rules()
       {
           return [
               'name'         => 'required|min:2',
               'nation'        => ['required','min:2'],
               'description'    => 'required'
           ];
       }

       public function messages()
       {
           return [
               'name.required'=> 'El :attribute es requerido.',
               'name.min' => 'El :attribute debe tener al menos 2 caracteres',
               'nation.required'=> 'El :attribute es requerido.',
               'nation.min'    => 'El :attribute debe tener al menos 2 caracteres',
               'description.required'=> 'La :attribute es requerida.',
           ];
       }

       public function attributes()
       {
           return [
               'name'     => 'nombre del tanque',
               'nation'    => 'nacion del tanque',
               'description' => 'descripción del tanque'
           ];
       }
}
