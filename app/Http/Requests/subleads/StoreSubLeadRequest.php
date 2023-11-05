<?php

namespace App\Http\Requests\subleads;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\User;
use Gate;
use Symfony\Component\HttpFoundation\Response;

class StoreSubLeadRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        abort_if(Gate::denies('sub_lead_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
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
            'brand_id'=> ['integer','required'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['nullable','digits_between:8,12'],
            'password' => ['required','max:20','min:8'],
            'avatar' => ['nullable', 'image' ,'mimes:jpg,jpeg,png'],
        ];
    }
}
