<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class AddUser extends Component
{
    use LivewireAlert;
    public $name,$email,$password,$type;
    protected $rules = [
        'name' => 'required|string',
        'email' => 'required|email|unique:users',
        'type' => 'required',
        'password' => 'required',
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function addUser(){
        $validatedData = $this->validate();
        $validatedData['code'] = '234';
        User::create(
            $validatedData
        );
        $this->alert('success', 'User Created Successfully');
        $this->clearData();
    }

    public function clearData()
    {
        $this->name = '';
        $this->password = '';
        $this->email = '';

    }
    public function render()
    {
        return view('livewire.user.add-user')->layout('layouts.admin-main');
    }
}