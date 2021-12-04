<?php

namespace App\Http\Livewire;

use App\Domains\Complainant\Models\Complainant;
use App\Domains\Person\Models\Person;
use App\Domains\Suspect\Models\Suspect;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class AddComplainantTable extends DataTableComponent
{
    public $blotterId;
    public $message;
    public function mount($blotterId)
    {
        $this->blotterId = $blotterId;

    }

    public function columns(): array
    {
        return [
            Column::make(__('ID')),
            Column::make(__('Name'))
                ->sortable()
                ->searchable(function($builder, $term) {
                    return $builder->where(DB::raw('concat(first_name," ",middle_name, " ", last_name)'), 'like', "%$term%");
                }),
        ];
    }

    public function query(): Builder
    {
        return Person::query()
            ->select('id', DB::raw("CONCAT(first_name, ' ', middle_name,' ', last_name) AS name"));
    }
    public array $bulkActions = [
        'addComplainant' => 'add Complainant',
        'addSuspect' => 'add Suspect',
    ];

    public function addComplainant()
    {
        foreach($this->selected as $complainant)
        {
            Complainant::updateOrcreate([
                'person_id' => $complainant,
                'blotter_id' => $this->blotterId
            ]);
        }
        $this->emit('addedComplainant', ['message' => 'added Complainant', 'blotterId' => $this->blotterId]);
        $this->resetAll();
    }

    public function addSuspect()
    {
        foreach($this->selected as $suspect)
        {
           Suspect::updateOrcreate([
                'person_id' => $suspect,
                'blotter_id' => $this->blotterId
            ]);
        }
        $this->emit('addedSuspect', ['message' => 'added Suspect', 'blotterId' => $this->blotterId]);
        $this->resetAll();
    }

}
