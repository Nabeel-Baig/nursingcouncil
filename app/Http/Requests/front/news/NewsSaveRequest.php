<?php

namespace App\Http\Requests\front\news;

use Illuminate\Foundation\Http\FormRequest;

class NewsSaveRequest extends FormRequest
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
            'news_title' => ['required','string'],
            'news_sub_title' => ['required', 'string'],
            'news_details' => ['required'],
            'web_link' => ['sometimes','nullable'],
        ];
    }
}
