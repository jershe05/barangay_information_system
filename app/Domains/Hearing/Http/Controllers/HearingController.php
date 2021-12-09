<?php
namespace App\Domains\Hearing\Http\Controllers;


use App\Domains\Blotter\Models\Blotter;
use App\Domains\Hearing\Http\Requests\StoreHearingRequest;
use App\Domains\Hearing\Models\HearingSession;
use App\Domains\Official\Models\Official;

class HearingController
{
    public function list()
    {
        return view('backend.hearing.list');
    }

    public function add()
    {
        $blotters = Blotter::where('status', 0)->get();
        $officials = Official::all();
        return view('backend.hearing.add')
            ->with('blotters', $blotters)
            ->with('officials', $officials);
    }

    public function store(StoreHearingRequest $request)
    {
        if($this->countHearings(Blotter::where('id' , $request->get('case_id'))->first()) >= 3)
        {
            return redirect()->route('admin.hearing.schedules')->withErrors("Cannot create another hearing for this blotter (max hearing is 3)");
        }

        HearingSession::create([
            'official' => $request->get('official'),
            'case_id' => $request->get('case_id'),
            'time' => $request->get('time'),
            'date' => $request->get('date')
        ]);

        return redirect()->route('admin.hearing.schedules')->withFlashSuccess("Hearing Added!");
    }

    public function show(HearingSession $hearing)
    {
        return view('backend.hearing.show')
            ->with('hearing', $hearing);
    }
    public function delete(HearingSession $hearing)
    {
        $hearing->delete();
        return redirect()->route('admin.hearing.schedules')->withFlashSuccess("Hearing Deleted!");
    }

    private function countHearings(Blotter $blotter)
    {
        return count($blotter->hearings);
    }
}
