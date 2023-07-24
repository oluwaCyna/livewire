<?php

namespace App\Http\Livewire;

use App\Models\LocalGovernment;
use App\Models\State;
use Livewire\Component;

class CascadingDropdown extends Component
{
    public $lga = [];

    public $selectedState;

    public function loadLGA() 
    {
        $this->lga = LocalGovernment::where('state_id', $this->selectedState)->get();
    }

    public function render()
    {
        return view('livewire.cascading-dropdown', [
            'states' => State::all()
        ]);
    }
}
