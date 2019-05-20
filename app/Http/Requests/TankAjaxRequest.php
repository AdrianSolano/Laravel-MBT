<?php

namespace App\Http\Requests;

use App\Http\Requests\TankRequest;
use Illuminate\Validation\ValidationException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\JsonResponse;

class TankAjaxRequest extends TankRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = array();

        if ($this->exists('name')) {
            $rules['name'] = $this->validarNombre();
        }

        if ($this->exists('event')) {
            $rules['event'] = $this->validarEvento();
        }

        if ($this->exists('ammo')) {
            $rules['ammo'] = $this->validarAmmo();
        }

        if ($this->exists('nation')) {
            $rules['nation'] = $this->validarNation();
        }

        if ($this->exists('description')) {
            $rules['description'] = $this->validarDescripcion();
        }

        return $rules;
    }

    protected function failedValidation(Validator $validator)
    {
        $errores = $validator->errors();
        $atributos = $this->attributes();
        $listaErroresPorCampo = [];


        foreach ($atributos as $atributo => $texto) {
            if ($this->exists($atributo)) {
                $listaErroresPorCampo[$atributo] = $errores->get($atributo);
            }
        }
        $response = new JsonResponse($listaErroresPorCampo);

        throw new ValidationException($validator, $response);
    }
}
