<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AddComplainant extends Component
{
    public $blotterId;
    public $message;
    protected function getListeners()
    {
        return  [
            'addedComplainant' => 'addedComplainant',
            'addedSuspect' => 'addedSuspect'
        ];
    }

    public function addedComplainant($param)
    {
        $this->message = $param['message'];
        $this->emit('reloadComplainantsList', $param['blotterId']);
    }

    public function addedSuspect($param)
    {
        $this->message = $param['message'];
        $this->emit('reloadSuspectsList', $param['blotterId']);
    }

    public function mount($blotterId)
    {
        $this->blotterId = $blotterId;
    }

    public function render()
    {
        return view('livewire.add-complainant');
    }
}
