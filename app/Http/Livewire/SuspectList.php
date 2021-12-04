<?php

namespace App\Http\Livewire;

use App\Domains\Suspect\Models\Suspect;
use Livewire\Component;

class SuspectList extends Component
{
    protected function getListeners()
    {
        return  [
            'reloadSuspectsList' => 'reloadSuspectsList',
        ];
    }
    public $blotterId;
    public $suspects;
    public function reloadSuspectsList($blotterId)
    {
        $this->suspects = Suspect::join('people', 'people.id', '=', 'suspects.person_id')
            ->where('blotter_id', $blotterId)->get();
    }

    public function mount($blotterId)
    {
        $this->blotterId = $blotterId;
        $this->suspects = Suspect::join('people', 'people.id', '=', 'suspects.person_id')
            ->where('blotter_id', $blotterId)->get();
    }

    public function render()
    {
        return view('livewire.suspect-list');
    }
}
