<?php

namespace App\Http\Livewire\CarBrand;

use App\Models\CarBrand;
use App\Models\Category;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class AddBrand extends Component
{
    use LivewireAlert;
    public $name,$category_id,$full_name,$categories;

    protected $rules = [
        'name' => 'required|string',
        'category_id' => 'required',
        'full_name' => 'string|required'
    ];

    public function addBrand(){

        $validatedData = $this->validate();



        CarBrand::create($validatedData);
        $this->clearFields();
        $this->alert('success', 'Car Brand Created Successfully');

    }
    public function mount(){
        $this->categories = Category::all();
    }

    public function clearFields(){
        $this->name = '';
        $this->full_name = '';
        $this->picture = '';

    }
    public function render()
    {
        return view('livewire.car-brand.add-brand')->layout('layouts.admin-main');
    }
}
