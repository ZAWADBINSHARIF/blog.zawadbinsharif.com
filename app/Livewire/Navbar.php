<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Route;

class Navbar extends Component
{

    public $currentUri;

    public function mount()
    {
        $this->currentUri = Route::current()->uri();
    }

    public function render()
    {
        return view('livewire.navbar');
    }
}
