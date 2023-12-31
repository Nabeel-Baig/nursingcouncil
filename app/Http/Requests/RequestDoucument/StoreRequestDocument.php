<?php

namespace App\Http\Requests\RequestDoucument;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequestDocument extends FormRequest
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
            'subject' => ['required', 'string', 'max:60'],
            'detail' => ['required', 'string', 'max:1000'],
        ];
    }
}
