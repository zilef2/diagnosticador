<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Formularito extends Component
{
    public $valor;

    protected $rules = [
        'valor' => 'required|min:0|max:40',
    ];

    public function updated($propertyName){$this->validateOnly($propertyName);}

    public function saveContact(){
        $validatedData = $this->validate();

        session()->flash('message', 'Post successfully updated.');
    }

    public function render(){
        return view('livewire.formularito');
    }
}
