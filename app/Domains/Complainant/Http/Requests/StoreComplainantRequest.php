<?php

namespace App\Domains\Complainant\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComplainantRequest extends FormRequest
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
            'first_name' => ['required', 'max:100'],
            'last_name' => ['required', 'max:100'],
            'middle_name' => ['required', 'max:100'],
            'gender' => ['required'],
            'birthdate' => ['required'],
            'address' => ['required'],
            'phone' => ['required', 'numeric'],
            'email' => ['nullable', 'email', 'unique:people,email'],
            'type' => ['nullable'],
        ];
    }
}
