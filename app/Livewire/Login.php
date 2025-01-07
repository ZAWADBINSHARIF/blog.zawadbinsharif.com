<?php

namespace App\Livewire;

use Livewire\Component;

class Login extends Component
{

    public $email, $password;


    public function submit() {
        
    }

    public function render()
    {
        return view('livewire.login');
    }
}
