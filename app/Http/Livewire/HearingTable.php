<?php

namespace App\Http\Livewire;

use App\Domains\Hearing\Models\HearingSession;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Filter;

class HearingTable extends DataTableComponent
{

    public function columns(): array
    {
        return [
            Column::make(__('Schedule'), 'date')
                ->sortable()
                ->format(function ($value, $column, $row) {
                    return date('F j, Y', strtotime($row->date));
                })->asHtml(),
            Column::make(__('Time'))
                ->sortable()
                ->format(function ($value, $column, $row) {
                    return date('g:i a', strtotime($row->time));
                })->asHtml(),
            Column::make(__('Official'))
                ->format(function ($value, $column, $row) {
                    if($row->assignedOfficial)
                    {
                        $official = $row->assignedOfficial->person;
                        return $row->assignedOfficial->position . ' ' . $official->first_name . ' ' . $official->middle_name . ' ' . $official->last_name;
                    }
                    return 'Not Yet Assigned';
                })->asHtml(),
            Column::make(__('Blotter#'), 'case_id'),
            Column::make(__('Actions'))
            ->format(function ($value, $column, $row) {
                return view('backend.hearing.includes.actions', ['hearing' => $row]);
            }),
        ];
    }

    public function query(): Builder
    {
        $query = HearingSession::query()
            ->orderBy('date');
        return $query->when($this->getFilter('status'), fn ($query, $status) => $query->where('result', $status))
            ->when($this->getFilter('date'), fn ($query, $date) => $query->where('date', $date ));;
    }

    public function filters(): array
    {
        return [
            'status' => Filter::make('Status')
                ->select([
                    '' => 'Any',
                    '1' => 'Pending',
                    '2' => 'Unresolved',
                    '3' => 'Resolved'
                ]),
            'date' => Filter::make('Date')
                ->date(),
        ];
    }
}
