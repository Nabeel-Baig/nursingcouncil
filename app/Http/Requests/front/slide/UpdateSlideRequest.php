<?php

namespace App\Http\Requests\front\slide;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSlideRequest extends FormRequest
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
            'slide_title' => ['required', 'string'],
            'slide_sub_title' => ['required','string'],
            'slide_details' => ['required','string'],
            'slide_image' => ['required', 'image' ,'mimes:jpg,jpeg,png'],
        ];
    }
}
