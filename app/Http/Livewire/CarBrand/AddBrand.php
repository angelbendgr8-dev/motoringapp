<?php

namespace App\Http\Livewire\CarBrand;

use App\Models\CarBrand;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class AddBrand extends Component
{
    use LivewireAlert;
    public $name;

    protected $rules = [
        'name' => 'required|string',
    ];

    public function addBrand(){

        $validatedData = $this->validate();



        CarBrand::create($validatedData);
        $this->clearFields();
        $this->alert('success', 'Car Brand Created Successfully');

    }

    public function clearFields(){
        $this->name = '';
        $this->description = '';
        $this->picture = '';

    }
    public function render()
    {
        return view('livewire.car-brand.add-brand')->layout('layouts.admin-main');
    }
}
