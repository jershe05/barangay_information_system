<?php

namespace App\Http\Livewire;

use App\Domains\Person\Models\Person;
use Livewire\Component;

class AddPerson extends Component
{
    public $firstName;
    public $middleName;
    public $lastName;
    public $gender;
    public $birthdate;
    public $address;
    public $phone;
    public $email;
    public $alias;
    public $work;
    public $isCitizen;
    public $description;
    public $success;

    public $rules = [
        'firstName' => 'required',
        'middleName' => 'required',
        'lastName' => 'required',
        'gender' => 'required',
        'birthdate' => 'required',
        'address' => 'required',
        'phone' => 'required',
        'email' => 'required|email|nullable',
        'isCitizen' => 'required',
    ];

    public function add()
    {
        $validated = $this->validate();
        Person::create([
            'first_name' => $this->firstName,
            'middle_name' => $this->middleName,
            'last_name' => $this->lastName,
            'address' => $this->address,
            'phone' => $this->phone,
            'email' => $this->email,
            'work' => $this->work,
            'alias' => $this->alias,
            'gender' => $this->gender,
            'birthdate' => $this->birthdate,
            'type' => $this->isCitizen
        ]);

        $this->success = true;
        $this->reset();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);

    }
    public function render()
    {
        return view('livewire.add-person');
    }

    public function resetData()
    {
        $this->firstName = null;
        $this->middleName = null;
        $this->lastName = null;
        $this->gender = null;
        $this->birthdate = null;
        $this->address = null;
        $this->phone = null;
        $this->email = null;
        $this->isCitizen = null;
        $this->description = null;
        $this->alias = null;
        $this->work = null;
    }
}
