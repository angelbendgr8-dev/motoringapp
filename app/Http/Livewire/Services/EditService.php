<?php

namespace App\Http\Livewire\Services;

use Livewire\Component;

use App\Models\Services;

use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Storage;

class EditService extends Component
{

    use WithFileUploads;
    use LivewireAlert;
    public $service,$process,$assurance,$others;
    public $picture;

    protected $rules = [
        'service.name' => 'required|string',
        'service.description' => 'required|string',
        'picture' => 'image|max:1024',
    ];

    public function mount($id){
        $this->service = Services::findOrFail($id);
        $this->process = $this->service->process;
        $this->assurance = $this->service->assurance;
        $this->others = $this->service->others;
    }

    public function updateService(){

        $validatedData = $this->validate();
        if($this->picture){
            $this->deleteOldPicture($this->picture);
        }

        $this->service->picture = $this->picture->store('services','public');
        $this->service->process = $this->process;
        $this->service->assurance = $this->assurance;
        $this->service->others= $this->others;

        $this->service->save();
        $this->alert('success', 'Services Updated Successfully');
        return redirect(route('admin.manage.services'));

    }
    public function deleteOldPicture(){
        if(Storage::exists('public/'.$this->service->picture)){
            //   dd($service->picture);
            Storage::delete('public/'.$this->service->picture);
            
            
            }else{
                dd('File does not exist.');
        }
            
    }
    public function render()
    {
        return view('livewire.services.edit-service')->layout('layouts.admin-main');
    }
}
