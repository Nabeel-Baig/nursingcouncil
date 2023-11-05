<?php

namespace App\Http\Requests\front\page;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePageInroduction extends FormRequest
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
            'title' => ['required'],
            'sub_title' => ['required'],
            'detail' => ['required'],
            'link' => ['required'],
            'image' => ['sometimes','nullable', 'image' ,'mimes:jpg,jpeg,png'],
        ];
    }
}
