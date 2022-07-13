<?php

namespace App\Http\Livewire\ServiceLocation;

use App\Models\ServiceLocation;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class AddLocation extends Component
{
    use LivewireAlert;
    public $state, $area;
    public $address;

    protected $rules = [
        'state' => 'required|string',
        'area' => 'required|string',
        'address' => 'required|string',
    ];

    public function addLocation(){

        $validatedData = $this->validate();



        ServiceLocation::create($validatedData);
        $this->clearFields();
        $this->alert('success', 'Location Created Successfully');

    }

    public function clearFields(){
        $this->state = '';
        $this->area = '';
        $this->address = '';

    }
    public function render()
    {
        return view('livewire.service-location.add-location')->layout('layouts.admin-main');
    }
}
