<?php

namespace App\Http\Livewire;

use App\Models\Feature;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddFeature extends Component
{
    use WithFileUploads;
    use LivewireAlert;
    public $name, $icon;

    protected $rules = [
        'name' => 'required|string',
        'icon' => 'image|max:1024',
    ];

    public function addFeatures(){

        $validatedData = $this->validate();
        $validatedData['icon'] = $this->icon->store('features','public');


        Feature::create($validatedData);
        $this->clearFields();
        $this->alert('success', 'Feature Created Successfully');

    }

    public function clearFields(){
        $this->name = '';
        $this->icon = '';

    }
    public function render()
    {
        return view('livewire.add-feature')->layout('layouts.admin-main');;
    }
}