<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Count extends Component
{
    public $value = 0;

    public function increase ()
    {
        $this->value++;
    }

    public function decrease ()
    {
        $this->value--;
    }

    public function render()
    {
        return view('livewire.count');
    }
}
