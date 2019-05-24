<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EvenAjaxtRequest extends FormRequest
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

        if ($this->exists('nameEvent')) {
            $rules['nameEvent'] = $this->validarNombre();
        }

        if ($this->exists('year')) {
            $rules['year'] = $this->validarEvento();
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
