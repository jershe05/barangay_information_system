<?php

namespace App\Http\Livewire;

use App\Domains\Blotter\Models\Blotter;
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

    public function query(): Builder
    {
        return Blotter::query()
            ->whereNotNull('report');
    }

    public function rowView(): string
    {
        return 'backend.Blotter.includes.row';
    }
}
