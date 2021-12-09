<?php

namespace App\Domains\Person\Http\Requests;

use App\Domains\Auth\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use LangleyFoxall\LaravelNISTPasswordRules\PasswordRules;

/**
 * Class StoreUserRequest.
 */
class StorePersonRequest extends FormRequest
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
            'first_name' => ['required'],
            'middle_name' => ['required'],
            'last_name' => ['required'],
            'gender' => ['required'],
            'birthdate' => ['required'],
            'address' => ['required'],
            'phone' =>['required'],
            'email' =>['nullable'],
            'work' =>['nullable'],
            'alias' => ['required'],
            'type' => ['nullable'],
            'description' => ['nullable'],
        ];
    }
}
