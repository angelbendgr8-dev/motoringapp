<?php

namespace App\Http\Livewire\Request;

use App\Models\ServiceRequest;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class EditRequest extends Component
{


    use LivewireAlert;
    public $request;

    protected $rules = [
        'request.status' => 'required',
    ];

    public function changeStatus()
    {
       $this->request->save();
       $this->alert('success', 'Request status updated successfully');
    }



    public function mount($id)
    {
        $this->request = ServiceRequest::find($id)->with(['user', 'service'])->first();
        // dd($this->request);
    }
    public function render()
    {
        return view('livewire.request.edit-request')->layout('layouts.admin-main');
    }
}
