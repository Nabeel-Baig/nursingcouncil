<?php

namespace App\Http\Requests\front\documents;

use Illuminate\Foundation\Http\FormRequest;

class DocumentStoreRequest extends FormRequest
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
            'file_name' => ['required','string','max:20'],
            'file_path' => ['sometimes','required', 'file' ,'mimes:pdf,docx','max:10240'],
        ];
    }
}
