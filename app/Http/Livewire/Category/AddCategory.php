<?php

namespace App\Http\Livewire\Category;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class AddCategory extends Component
{
    use WithFileUploads;
    use LivewireAlert;
    public $name, $description;
    public $picture;

    protected $rules = [
        'name' => 'required|string',
        'description' => 'required|string',
        'picture' => 'max:1024',
    ];

    public function addCategory(){

        $validatedData = $this->validate();
        $validatedData['picture'] = $this->picture->store('categories','public');


        Category::create($validatedData);
        $this->clearFields();
        $this->alert('success', 'Category Created Successfully');

    }

    public function clearFields(){
        $this->name = '';
        $this->description = '';
        $this->picture = '';

    }
    public function render()
    {
        return view('livewire.category.add-category')->layout('layouts.admin-main');
    }
}
