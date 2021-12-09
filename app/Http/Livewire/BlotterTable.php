<?php

namespace App\Http\Livewire;

use App\Domains\Blotter\Models\Blotter;
use App\Domains\Complainant\Models\Complainant;
use App\Domains\Suspect\Models\Suspect;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class BlotterTable extends DataTableComponent
{

    public function columns(): array
    {
        return [
            Column::make(__('Date'))
                ->sortable(),
            Column::make(__('Address'))
                ->sortable(),
            Column::make(__('Report')),
            Column::make(__('Date Reported')),

            Column::make(__('Actions')),
        ];
    }

    public  function mount($complaint = null, $blotter = null)
    {
        session(['complaint' => $complaint]);
        session(['blotter' => $blotter]);
    }

    public function query(): Builder
    {

        if(session('complaint'))
        {
            $complaint = session('complaint');
            session(['complaint' => null]);
            return Suspect::join('blotters', 'blotters.id', 'suspects.blotter_id')
                ->where('suspects.person_id', $complaint)
                ->select('date', 'time', 'report', 'blotters.created_at as created_at', 'blotters.id as id');
        }

        if(session('blotter'))
        {
            $blotter = session('blotter');
            session(['blotter' => null]);
            return Complainant::join('blotters', 'blotters.id', 'complainants_list.blotter_id')
                ->where('complainants_list.person_id', $blotter)
                ->select('date', 'time', 'report', 'blotters.created_at as created_at', 'blotters.id as id');
        }

        return Blotter::query()
            ->whereNotNull('report');
    }

    public function rowView(): string
    {
        return 'backend.Blotter.includes.row';
    }
}
