<?php

namespace App\Http\Livewire;

use App\Models\ToDo as ModelsToDo;
use Livewire\Component;

class ToDo extends Component
{
    public $action;

    protected $rules = [
        'action' => 'required|max:100'
    ];

    public function updated($property)
    {
        $this->validateOnly($property);
    }

    public function statusToDo($id)
    {
        $toDo = ModelsToDo::find($id);
        if ($toDo->status === 'active') {
            $toDo->status = 'done';
            $toDo->save();
        }else {
            $toDo->status = 'active';
            $toDo->save();
        }
    }

    public function deleteToDo($id)
    {
        ModelsToDo::find($id)->delete();
    }

    public function saveToDo()
    {
        $this->validate();
        
        ModelsToDo::create([
            'action' => $this->action,
        ]);
        $this->action = '';
    }

    public function render()
    {
        return view('livewire.to-do', [
            'toDo' => ModelsToDo::latest()->get()
        ]);
    }
}
