<?php

namespace App\Http\Livewire\ServiceLocation;

use App\Models\ServiceLocation;
use Illuminate\Support\Facades\Storage;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ViewLocations extends Component
{
    use LivewireAlert;
    public $locations=[];
    public $selected;

    protected $listeners =['confirmDelete'];

    public function mount(){
        $this->locations = ServiceLocation::all();
    }

    public function deleteLocation($id) {
        $this->selected = $id;
        $this->alert('question', 'Are you sure you want to delete this Location',[
            'position' => 'center',
            'showConfirmButton' => true,
            'confirmButtonText' => 'Delete',
            'showCancelButton' => true,
            'cancelButtonText' => 'Cancel',
            'onConfirmed' => 'confirmDelete',
            'timer' => null,
        ]);
    }
    public function confirmDelete()
    {
      $category = ServiceLocation::find($this->selected);

        $category->delete();

    }
    public function render()
    {
        return view('livewire.service-location.view-locations')->layout('layouts.admin-main');
    }
}
