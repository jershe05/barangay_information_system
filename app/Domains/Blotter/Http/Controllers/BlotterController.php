<?php

namespace App\Domains\Blotter\Http\Controllers;

use App\Domains\Blotter\Http\Requests\BlotterStoreRequest;
use App\Domains\Blotter\Models\Blotter;
use App\Domains\Complainant\Models\Complainant;
use App\Domains\Complainant\Http\Requests\StoreComplainantRequest;
use App\Domains\Official\Models\Official;
use App\Domains\Person\Models\Person;
use App\Domains\Suspect\Http\Requests\StoreSuspectRequest;
use App\Domains\Suspect\Models\Suspect;
use Illuminate\Http\Request;

class BlotterController
{
    public function addComplainant()
    {
        $complainant = Person::where('status', 0)->get();
        return view('backend.Blotter.Pages.create-complainant')
            ->with('route', route('admin.blotter.store.complainant'))
            ->with('complainants', $complainant)
            ->with('formTitle', 'Add Complainant');
    }

    public function addBlotter()
    {
        $complainant = Person::where('status', 0)->get();
        return view('backend.Blotter.Pages.create')
            ->with('complainants', $complainant);
    }

    public function storeBlotter(BlotterStoreRequest $request)
    {
        $blotter = Blotter::create($request->validated());
        $complainants = Person::where('status', 0)->get();
        foreach($complainants as $complainant)
        {
            $complainant->status = 1;
            $complainant->save();

            Complainant::create([
                'blotter_id' => $blotter->id,
                'person_id' => $complainant->id
            ]);
        }

        return redirect()->route('admin.blotter.add.suspect', $blotter)->withFlashSuccess('added new Blotter');

    }

    public function addSuspect(Blotter $blotter)
    {
        $suspects = Suspect::join('people', 'people.id', '=', 'suspects.person_id')
                ->where('blotter_id', $blotter->id)->get();
        return view('backend.Blotter.Pages.create-suspects')
            ->with('suspects', $suspects)
            ->with('formTitle', 'Add Suspects')
            ->with('route', route('admin.blotter.store.suspect', $blotter))
            ->with('blotter', $blotter);
    }

    public function storeSuspect(StoreSuspectRequest $request, Blotter $blotter)
    {
        $input = $request->validated();
        $person = $this->checkPersonIfExisting($input);
        if(!count($person))
        {
            $person = Person::create($request->data());
            $person->status = 1;
            $person->save();
            $person->refresh();
        }

        $suspect = Suspect::create([
            'blotter_id' => $blotter->id,
            'person_id' => $person->id,
            'description' => $request->description()
        ]);

        return redirect()->back()->withSuccessFlash('Suspect Successfully added!');
    }

    public function createBlotter(Request $request)
    {

        $blotter = Blotter::create($request);
        return view('my-view')->flash_success('Blotter Added!');
    }

    private function checkPersonIfExisting($input)
    {
        return Person::where('first_name', $input['first_name'])
        ->where('last_name', $input['last_name'])
        ->where('middle_name', $input['middle_name'])
        ->first();
    }

    public function storeComplainant(StoreComplainantRequest $request)
    {
        $input = $request->validated();

        $person = $this->checkPersonIfExisting($input);

        if(count($person))
        {
            $person->status = 0;
            $person->save();
            $person->refresh();
        } else {
            Person::create($request->validated());
        }

        return redirect()->back()->withSuccessFlash('Complainant Successfully added!');
    }

    public function createCase(Blotter $blotter)
    {
        $officials = Official::all();
        $suspects = Suspect::join('people', 'people.id', '=', 'suspects.person_id')
            ->where('blotter_id', $blotter->id)->get();
        $complainants = Complainant::join('people', 'people.id', '=', 'complainants_list.person_id')
            ->where('blotter_id', $blotter->id)->get();

        return view('backend.Blotter.Pages.create-case')
            ->with('suspects', $suspects)
            ->with('officials', $officials)
            ->with('complainants', $complainants)
            ->with('formTitle', 'Add Hearing Schedule')
            ->with('route', route('admin.blotter.store.suspect', $blotter))
            ->with('blotter', $blotter);
    }



    public function setHearings()
    {

    }

}
