<?php

namespace App\Http\Livewire\Category;

use App\Models\Category;
use Livewire\Component;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Support\Facades\Storage;

class ViewCategory extends Component
{

    use LivewireAlert;
    public $categories=[];
    public $selected;

    protected $listeners =['confirmDelete'];

    public function mount(){
        $this->categories = Category::all();
    }

    public function deleteCategory($id) {
        $this->selected = $id;
        $this->alert('question', 'Are you sure you want to delete this category',[
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
      $category = Category::find($this->selected);
      if(Storage::exists('public/'.$category->picture)){
        //   dd($service->picture);
        Storage::delete('public/'.$category->picture);
        $category->delete();
        $this->categories = Category::all();
        }else{
            dd('File does not exist.');
        }
    }
    public function render()
    {
        return view('livewire.category.view-category')->layout('layouts.admin-main');
    }
}
