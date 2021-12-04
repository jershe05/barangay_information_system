<?php

namespace App\Http\Livewire;

use App\Domains\Person\Models\Person;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Illuminate\Support\Facades\DB;
class OfficialList extends DataTableComponent
{

    public function columns(): array
    {
        return [
            Column::make(__('Name'))
                ->sortable()
                ->searchable(function($builder, $term) {
                    return $builder->where(DB::raw('concat(first_name," ",middle_name, " ", last_name)'), 'like', "%$term%");
                }),
            Column::make(__('Position'))
                ->sortable(),
            Column::make(__('Address'))
                ->sortable(),
            Column::make(__('Gender'))
                ->sortable(),
            Column::make(__('Birthdate'))
                ->sortable(),
            Column::make(__('Email'))
                ->sortable(),
            Column::make(__('Phone'))
                ->sortable(),
            Column::make(__('Actions')),
        ];

    }

    public function query(): Builder
    {
        return Person::join('officials', 'officials.person_id', 'people.id')
        ->select(
            DB::raw("CONCAT(first_name, ' ', middle_name,' ', last_name) AS name"),
            'position',
            'address',
            'gender',
            'birthdate',
            'email',
            'phone',
            'work',
            'alias',
            'type'
        );
    }
}
