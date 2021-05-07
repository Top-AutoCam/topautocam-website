<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Subscribe as AppSubscribe;
use Illuminate\Http\Request;

class Subscribe extends Component
{

    public $name;
    public $email;
    public $successMessage;
    public $aleadyExist;

    protected $rules = [
        'name' => 'required|min:5',
        'email' => 'required|string|email|max:255|unique:subscribes',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit(Request $request)
    {
        $this->validate();
        AppSubscribe::create($this->modalData());
        $this->resetForm();
        $this->successMessage = "Subscribe success.";
    }

    public function modalData()
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
        ];
    }

    public function resetForm()
    {
        $this->name = '';
        $this->email = '';
    }

    public function render()
    {
        return view('livewire.subscribe');
    }
}
