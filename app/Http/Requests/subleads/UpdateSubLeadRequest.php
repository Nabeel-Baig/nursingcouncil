<?php

namespace App\Http\Requests\subleads;

use Illuminate\Foundation\Http\FormRequest;
use Gate;
use Symfony\Component\HttpFoundation\Response;

class UpdateSubLeadRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        abort_if(Gate::denies('sub_lead_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
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
            'user_id' => ['integer','required','exists:users,id'],
            'name' => ['required', 'string', 'max:255'],
            'email' => "required|email|max:128|unique:users,email,".$this->id.",id",
            'phone' => ['nullable','digits_between:8,12'],
            'avatar' => ['sometimes','required', 'image' ,'mimes:jpg,jpeg,png'],
        ];
    }
}
