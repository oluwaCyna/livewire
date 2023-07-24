<?php

namespace App\Http\Livewire;

use Illuminate\Support\Str;
use App\Models\State;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Registration extends Component
{
    use WithFileUploads;

    public $first_name;
    public $last_name;
    public $email;
    public $city;
    public $state;
    public $zip;
    public $tc;
    public $image;

    protected $rules = [
        'first_name' => 'required|min:3|string',
        'last_name' => 'required|min:3|string',
        'email' => 'required|email',
        'city' => 'required|string',
        'state' => 'required|string',
        'zip' => 'required|integer',
        'tc' => 'required',
        'image' => 'required|image|max:1024'
    ];

    protected $messages = [
        'tc.required' => 'You must agree to the Terms and Conditions, Fela!'
    ];	

    public function updated($property)
    {
        $this->validateOnly($property);
    }

    public function updatedPhoto($property)
    {
        $this->validateOnly($property);
    }

    public function register()
    {
        $validated = $this->validate();
        $this->image->storeAs('public');
        // $this->image->storeAs(public_path('images'), $filename);
// dd($filename);
        $user = User::create($validated);
        $user->image = Storage::url();
        $user->save();
    }

    public function render()
    {
        return view('livewire.registration', [
            'states' => State::all(),
            'user' => User::all()
        ]);
    }
}
