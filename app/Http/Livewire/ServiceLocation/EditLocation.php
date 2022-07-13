<?php

namespace App\Http\Livewire\ServiceLocation;

use App\Models\ServiceLocation;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class EditLocation extends Component
{
    use LivewireAlert;
    public $location;

    protected $rules = [
        'location.state' => 'required|string',
        'location.area' => 'required|string',
        'location.address' => 'required|string',
    ];

    public function mount($id){
        $this->location = ServiceLocation::findorFail($id);
    }

    public function editLocation(){

        $validatedData = $this->validate();



        $this->location->save();
        $this->alert('success', 'Location Updated Successfully');
        return redirect(route('admin.manage.locations'));

    }

    public function render()
    {
        return view('livewire.service-location.edit-location')->layout('layouts.admin-main');
    }
}
