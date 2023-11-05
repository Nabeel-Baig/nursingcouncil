<?php

namespace App\Http\Requests\front\documents;

use Illuminate\Foundation\Http\FormRequest;

class GeneralDocumentDeleteRequest extends FormRequest
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
            'file_id' => ['required','exists:user_general_documents,id']
        ];
    }
}
