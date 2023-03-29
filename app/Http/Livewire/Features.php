<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Feature;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithFileUploads;

class Features extends Component
{
    public $features;
    public function mount(){
        $this->features = Feature::all();
    }

    public function render()
    {
        return view('livewire.features')->layout('layouts.admin-main');
    }
}