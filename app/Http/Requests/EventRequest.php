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
        return [
            'nameEvent'      => 'required|min:2',
            'year'     => 'required',
            'description'       => 'description|min:15',
        ];
    }
    public function messages()
    {
        return [
            'nameEvent.required'        =>  'El :attribute es requerido',
            'nameEvent.min'             =>  'El :attribute debe tener al menos 2 caracteres',
            'year.required'             =>  'El :attribute es requerido',
            'description.required'      =>  'El :attribute es requerido',
            'description.min'           => 'El :attribute debe tener al menos 15 caracteres'
        ];
    }
}
