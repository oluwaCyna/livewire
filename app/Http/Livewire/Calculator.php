<?php

namespace App\Http\Livewire;

use Livewire\Component;

use function PHPSTORM_META\type;

class Calculator extends Component
{
    public $result;
    public $newInput = '';
    public $fInput = '';
    public $lInput = '';

    public function newInput($input)
    {
        $this->result = $this->result . $input;
    }

    public function fInput()
    {
        // 
        if ($this->fInput === '') {
            $this->fInput = (int) $this->result;
            $this->result = '';
        }
    }

    public function clear()
    {
        // 
        $this->reset(['result', 'fInput']);
    }

    public function sum()
    {
        if($this->result === '') {
            return;
        } 
        // 
        if ($this->fInput === '') {
            $this->fInput = (int) $this->result;
            $this->result = '';
        } else {
            $this->result = (int) $this->result + (int) $this->fInput;
            $this->fInput = (int) $this->result;
            $this->result = '';
        }
        // dd($this->fInput, $this->result);
    }

    public function evaluate()
    {
        if($this->result === '' && $this->fInput === '') {
            return $this->result = '';
        }else {
            $this->result = (int) $this->result + (int) $this->fInput;
            $this->fInput = (int) $this->result;
        }        

    }

    public function render()
    {
        return view('livewire.calculator');
    }
}
