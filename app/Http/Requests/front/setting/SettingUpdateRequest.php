<?php

namespace App\Http\Requests\front\setting;

use Illuminate\Foundation\Http\FormRequest;

class SettingUpdateRequest extends FormRequest
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
            'name' => ['required','string'],
            'title' => ['required', 'string'],
            'youtube_link' => ['required'],
            'fb_link' => ['required','string'],
            'twitter_link' => ['required', 'string'],
            'insta_link' => ['required'],
            'contact_number' => ['required'],
            'contact_email' => ['required','email'],
            'location' => ['required'],
            'footer_info' => ['required','string'],
            'copyright_info' => ['required'],
            'logo' => ['sometimes','required','image','mimes:jpeg,jpg,png'],
            'favicon' => ['sometimes','required','image','mimes:jpeg,jpg,png']
        ];

    }
}
