<?php

namespace App\Livewire;

use Livewire\Component;

class Registration extends Component
{

    public $name, $email, $password;

    public function submit(){
        
    }

    public function render()
    {
        return view('livewire.registration');
    }
}
