<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Dashboard extends Component
{

    public function mount(){
        // dd('here');
    }
    public function render()
    {
        return view('livewire.dashboard')->layout('layouts.admin-main');
    }
}
