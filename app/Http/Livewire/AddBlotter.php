<?php

namespace App\Http\Livewire;

use App\Domains\Blotter\Models\Blotter;
use App\Domains\Hearing\Models\HearingSession;
use Livewire\Component;

class AddBlotter extends Component
{
    public $blotter;
    public $rules = [
        'date' => 'required',
        'description' => 'required',
        'address' => 'required',
        'time' => 'required',
    ];
    public $date;
    public $description;
    public $address;
    public $time;
    public $hearingDate;
    public $hearingTime;

    public function mount(Blotter $blotter)
    {
        $this->blotter = $blotter;
    }

    public function addBlotter()
    {
        $this->validate();

        $this->blotter->insident_address = $this->address;
        $this->blotter->date = $this->date;
        $this->blotter->report = $this->description;
        $this->blotter->time = $this->time;
        $this->blotter->save();

        if($this->hearingDate)
        {
            HearingSession::create([
                'case_id' => $this->blotter->id,
                'date' => $this->hearingDate,
                'time' => $this->hearingTime
            ]);
        }

        return redirect()->route('admin.blotter.list');
    }

    public function render()
    {
        return view('livewire.add-blotter');
    }
}
