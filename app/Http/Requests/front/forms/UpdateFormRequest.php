<?php

namespace App\Http\Requests\front\forms;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFormRequest extends FormRequest
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
            'title' => ['required', 'string'],
            'description' => ['required', 'string'],
            'attachment' => ['sometimes','required'],
            // 'avatar' => ['sometimes','required', 'image' ,'mimes:jpg,jpeg,png'],
        ];
    }
}
