<?php

namespace App\Domains\Suspect\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSuspectRequest extends FormRequest
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
            'description' => ['required']
        ];
    }

    public function data()
    {
        return [
            'first_name' => $this->get('first_name'),
            'last_name' => $this->get('last_name'),
            'middle_name' =>$this->get('middle_name'),
            'gender' => $this->get('gender'),
            'birthdate' => $this->get('birthdate'),
            'address' => $this->get('address'),
            'phone' => $this->get('phone'),
            'email' => $this->get('email'),
            'type' => $this->get('type'),
        ];
    }

    public function description()
    {
        return $this->get('description');
    }
}
