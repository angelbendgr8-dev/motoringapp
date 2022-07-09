<?php

namespace App\Http\Livewire\Services;

use App\Models\Services;
use Livewire\Component;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class AddService extends Component
{
    use WithFileUploads;
    use LivewireAlert;
    public $name, $description, $process='', $assurance='', $others ='';
    public $picture;

    protected $rules = [
        'name' => 'required|string',
        'description' => 'required|string',
        'picture' => 'image|max:1024',
    ];

    public function addService(){

        $validatedData = $this->validate();
        $validatedData['picture'] = $this->picture->store('services','public');
        $validatedData['process'] = $this->process;
        $validatedData['assurance'] = $this->assurance;
        $validatedData['others'] = $this->others;

        Services::create($validatedData);
        $this->clearFields();
        $this->alert('success', 'Services Created Successfully');

    }

    public function clearFields(){
        $this->name = '';
        $this->description = '';
        $this->image = '';
        $this->picture = '';
        $this->process = '';
        $this->assurance = '';
        $this->others = '';
    }


    public function render()
    {
        return view('livewire.services.add-service')->layout('layouts.admin-main');
    }
}
