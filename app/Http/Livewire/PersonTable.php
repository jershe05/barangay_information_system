<?php

namespace App\Http\Livewire;

use App\Domains\Official\Models\Official;
use App\Domains\Person\Models\Person;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Illuminate\Support\Facades\DB;
class PersonTable extends DataTableComponent
{
    public array $perPageAccepted = [5, 10, 20, 50];
    public array $bulkActions = [
        'addKapitan' => 'add as Kapitan',
        'addKagawad' => 'add as Kagawad',
    ];

    public function addKapitan()
    {
        if(count($this->selected) > 1)
        {

        }
        Official::updateOrCreate([
            'person_id' => $this->selected[0],
            'position' => 'Kapitan'
        ]);
    }

    public function addKagawad()
    {
        foreach($this->selected as $kagawad)
        {
            Official::updateOrCreate([
                'person_id' => $kagawad,
                'position' => 'Kagawad'
            ]);
        }

        $this->resetAll();
    }

    public function columns(): array
    {
        return [
            Column::make(__('ID'), 'id')
                ->sortable(),
            Column::make(__('Name'))
                ->sortable()
                ->searchable(function($builder, $term) {
                    return $builder->where(DB::raw('concat(first_name," ",middle_name, " ", last_name)'), 'like', "%$term%");
                }),
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
            Column::make(__('Work'))
                ->sortable(),
            Column::make(__('Alias'))
                ->sortable(),
            Column::make(__('Citizen')),
            Column::make(__('Actions')),
        ];

    }

    public function query(): Builder
    {

        return Person::select('id',
                DB::raw("CONCAT(first_name, ' ', middle_name,' ', last_name) AS name"),
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
