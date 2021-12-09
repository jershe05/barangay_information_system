<?php

namespace App\Http\Livewire;

use App\Domains\Indigent\Models\Indigent;
use App\Domains\Person\Models\Person;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class AddIndigentTable extends DataTableComponent
{

    public function columns(): array
    {
        return [
            Column::make(__('Name'))
                ->sortable()
                ->searchable(function($builder, $term) {
                    return $builder->where(DB::raw("CONCAT(first_name, ' ' , middle_name, ' ', last_name)"), 'like', "%$term%");
                })
                ->format(function ($value, $column, $row) {
                    return $row->name;
                })->asHtml(),
            Column::make(__('Gender'))
                ->sortable(),
            Column::make(__('Birthdate'))
                ->sortable(),
            Column::make(__('Address'))
                ->sortable()
                ->searchable(),
            Column::make(__('Phone'))
                ->searchable()
                ->sortable(),
            Column::make(__('Email'))
                ->searchable()
                ->sortable(),
            Column::make(__('Work'))
                ->sortable(),
            Column::make(__('Alias'))
                ->searchable()
                ->sortable(),
            Column::make(__('Actions'))
            ->format(function ($value, $column, $row) {
                return view('backend.indigent.includes.actions', ['person' => $row]);
            }),
        ];
    }

    public function query(): Builder
    {
        $query = Person::where('type', 1)
            ->select(DB::raw("CONCAT(first_name, ' ' , middle_name, ' ', last_name) as name"), 'people.*');
        return $query;
    }

    public array $bulkActions = [
        'add' => 'add',
    ];

    public function add()
    {
        if(count($this->selected) > 0)
        {
            foreach($this->selected as $key => $selected)
            {
                Indigent::updateOrCreate([
                    'person_id' => $this->selected[$key],
                ]);
            }
        }
        return redirect()->route('admin.indigent.list');
    }
}
