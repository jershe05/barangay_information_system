<?php

namespace App\Domains\Blotter\Http\Controllers;

use App\Domains\Blotter\Http\Requests\BlotterStoreRequest;
use App\Domains\Blotter\Models\Blotter;
use App\Domains\Complainant\Models\Complainant;
use App\Domains\Complainant\Http\Requests\StoreComplainantRequest;
use App\Domains\Hearing\Models\HearingSession;
use App\Domains\Official\Models\Official;
use App\Domains\Person\Models\Person;
use App\Domains\Suspect\Http\Requests\StoreSuspectRequest;
use App\Domains\Suspect\Models\Suspect;
use Illuminate\Http\Request;

class BlotterController
{

    public function addBlotter()
    {
        $blotter = Blotter::where('report', null)->first();
        if(!$blotter) {
            $blotter = Blotter::create([
                'report' => null
            ]);
        }

        return view('backend.Blotter.create')
            ->with('blotter', $blotter);
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

    public function list()
    {
        return view('backend.Blotter.list');
    }

    public function show(Blotter $blotter)
    {
        $complainants = Complainant::join('people', 'people.id', 'complainants_list.person_id')
            ->where('complainants_list.blotter_id', $blotter->id)->get();
        $suspects = Suspect::join('people', 'people.id', 'suspects.person_id')
            ->where('suspects.blotter_id', $blotter->id)->get();
        $hearings = HearingSession::where('case_id', $blotter->id)->get();
        $official = Official::join('people', 'people.id', 'officials.person_id')->get();

        return view('backend.Blotter.show')
            ->with('blotter', $blotter)
            ->with('complainants', $complainants)
            ->with('suspects', $suspects)
            ->with('hearings', $hearings)
            ->with('official', $official);

    }

}
