<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ModeloEditRequest extends FormRequest
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
        $modelo = $this->route('modelo');

        return [
            'nombre' => ['required','unique:modelos,nombre,' . $modelo->id],
        ];
    }
}
