<?php

namespace App\Http\Requests\users;

use Illuminate\Foundation\Http\FormRequest;
use Gate;
use Symfony\Component\HttpFoundation\Response;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // abort_if(Gate::denies('user_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
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
            'first_name' => ['required', 'string', 'max:255'],
            'middle_name' => ['sometimes','nullable', 'string', 'max:255'],
            'last_name' => ['sometimes','nullable', 'string', 'max:255'],
            'email' => ['sometimes','nullable', 'email'],
            'phone' => ['sometimes','nullable', 'integer']
            // 'dob' => ['sometimes','required'],
            // 'address' => ['sometimes','required'],
            // 'avatar' => ['sometimes','required', 'image' ,'mimes:jpg,jpeg,png'],
        ];
    }
}
