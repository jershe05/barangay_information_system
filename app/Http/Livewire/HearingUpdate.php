<?php

namespace App\Http\Livewire;

use App\Domains\Blotter\Models\Blotter;
use App\Domains\Hearing\Models\HearingSession;
use Livewire\Component;

class HearingUpdate extends Component
{
    public $hearing;
    public $description;
    public $status;
    public $date;
    public $time;
    public function mount(HearingSession $hearing)
    {
        $this->hearing = $hearing;
        $this->description = $this->hearing->description;
        $this->date = $this->hearing->date;
        $this->time = $this->hearing->time;
        $this->status = $this->hearing->status;
    }

    public function saveHearing()
    {

        $this->hearing->description = $this->description;
        $this->hearing->result = $this->status;
        $this->hearing->date = $this->date;
        $this->hearing->time = $this->time;
        $this->hearing->save();



        $this->hearing->blotter->status = $this->status;
        $this->hearing->blotter->save();

        $this->setBlotterStatus($this->hearing->blotter);


        return redirect()->route('admin.hearing.schedules');
    }

    public function render()
    {
        return view('livewire.hearing-update');
    }

    private function setBlotterStatus(Blotter $blotter)
    {
        $blotter->status = (int) $this->status;
        $blotter->save();
    }
}
