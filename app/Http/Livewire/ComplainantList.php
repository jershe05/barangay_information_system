<?php

namespace App\Http\Livewire;

use App\Domains\Complainant\Models\Complainant;
use Livewire\Component;

class ComplainantList extends Component
{
    protected function getListeners()
    {
        return  [
            'reloadComplainantsList' => 'reloadComplainantsList',
        ];
    }

    public $blotterId;
    public $complainants;
    public function mount($blotterId)
    {
        $this->blotterId = $blotterId;
        $this->complainants = Complainant::join('people', 'people.id', '=', 'complainants_list.person_id')
            ->where('blotter_id', $blotterId)->get();
    }

    public function reloadComplainantsList($blotterId)
    {
        $this->complainants = Complainant::join('people', 'people.id', '=', 'complainants_list.person_id')
            ->where('blotter_id', $blotterId)->get();
       
    }

    public function render()
    {
        return view('livewire.complainant-list');
    }
}
