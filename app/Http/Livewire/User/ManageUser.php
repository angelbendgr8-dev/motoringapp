<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Livewire\WithPagination;

class ManageUser extends Component
{

    use WithPagination;
    public $search,$selected,$total_users;

    // protected $listeners = ['filter'];
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function mount()
    {
        // $managers = User::paginate(25);
        // $this->total_managers = User::whereType(2)->count();
        // $this->total_users = User::whereType(0)->count();
        // dd($this->total_users);
    }


    public function getUsers()
    {
        if (!empty($this->search)) {
            return  User::where('name', 'like', '%' . $this->search . '%')
                        ->orWhere('email', 'like', '%' . $this->search . '%')
                
                ->paginate(25);
        } else {
            return  User::whereType(2)->paginate(25);
        }
    }

    public function deleteUser($id) {
        $this->selected = $id;
        $this->alert('question', 'Are you sure you want to delete this User',[
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
      $user = User::find($this->selected);
      if(Storage::exists('public/'.$user->picture)){
        //   dd($service->picture);
        Storage::delete('public/'.$user->picture);
        $user->delete();

        }else{
            dd('File does not exist.');
        }
    }
    public function render()
    {
        return view('livewire.user.manage-user', [

            'users' => $this->getUsers(),

        ])->layout('layouts.admin-main');
    }

}