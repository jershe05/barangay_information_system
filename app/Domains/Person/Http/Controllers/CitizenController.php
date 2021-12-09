<?php
namespace App\Domains\Person\Http\Controllers;

use App\Domains\Person\Http\Requests\StorePersonRequest;
use App\Domains\Person\Models\Person;

class CitizenController
{
    public function list()
    {
        return view('backend.citizen.list');
    }
    public function show(Person $person)
    {
        return view('backend.citizen.show')
            ->with('person', $person);
    }

    public function add()
    {
        return view('backend.citizen.add');
    }

    public function store(StorePersonRequest $request)
    {
        Person::create([
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'middle_name' => $request->get('middle_name'),
            'gender' => $request->get('gender'),
            'birthdate' => $request->get('birthdate'),
            'address' => $request->get('address'),
            'phone' => $request->get('phone'),
            'email' => $request->get('email'),
            'word' => $request->get('email'),
            'alias' => $request->get('alias'),
            'type' => $request->get('type'),
            'description' => $request->get('description'),
        ]);

        return redirect()->route('admin.citizen.list')->withFlashSuccess('Citizen Successfully added!');
    }
}
