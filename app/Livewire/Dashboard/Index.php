<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;

class Index extends Component
{


    public function mount()
    {
        session()->flash('dashboard', "Dashboard of admin");
    }

    public function render()
    {
        return view('livewire.dashboard.index');
    }
}
