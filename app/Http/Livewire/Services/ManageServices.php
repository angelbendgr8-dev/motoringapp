<?php

namespace App\Http\Livewire\Services;

use App\Models\Services;
use Livewire\Component;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Support\Facades\Storage;

class ManageServices extends Component
{
    use LivewireAlert;
    public $services;
    public $selected;

    protected $listeners =['confirmDelete'];

    public function mount(){
        $this->services = Services::all();
    }

    public function deleteService($id) {
        $this->selected = $id;
        $this->alert('question', 'Are you sure you want to delete this service',[
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
      $service = Services::find($this->selected);
      if(Storage::exists('public/'.$service->picture)){
        //   dd($service->picture);
        Storage::delete('public/'.$service->picture);
        $service->delete();
        $this->services = Services::all();
        }else{
            dd('File does not exist.');
        }
    }
    public function render()
    {
        return view('livewire.services.manage-services')->layout('layouts.admin-main');
    }
}
