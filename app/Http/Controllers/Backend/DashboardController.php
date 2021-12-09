<?php

namespace App\Http\Controllers\Backend;

use App\Domains\Blotter\Models\Blotter;
use App\Domains\Hearing\Models\HearingSession;
use App\Domains\Indigent\Models\Indigent;
use App\Domains\Person\Models\Person;

/**
 * Class DashboardController.
 */
class DashboardController
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $blotters = Blotter::all();
        $hearings = HearingSession::all();
        $citizens = Person::where('type', 1)->get();
        $indigents = Indigent::all();
        return view('backend.dashboard')
            ->with('blotters', $blotters)
            ->with('hearings', $hearings)
            ->with('citizens', $citizens)
            ->with('indigents', $indigents);
    }
}
