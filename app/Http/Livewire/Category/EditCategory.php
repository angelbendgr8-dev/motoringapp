<?php

namespace App\Http\Livewire\Category;

use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class EditCategory extends Component
{
    use WithFileUploads;
    use LivewireAlert;
    public $category;
    public $picture;

    protected $rules = [
        'category.name' => 'required|string',
        'category.description' => 'required|string',
        'picture' => 'image|max:1024',
    ];

    public function mount($id){
        $this->category = Category::findOrFail($id);
    }

    public function updateCategory(){

        $validatedData = $this->validate();
        if($this->picture){
            $this->deleteOldPicture($this->picture);
        }

        $this->category->picture = $this->picture->store('categories','public');


        $this->category->save();
        $this->alert('success', 'Category Updated Successfully');
        return redirect(route('admin.manage.categories'));

    }
    public function deleteOldPicture(){
        if(Storage::exists('public/'.$this->category->picture)){
            //   dd($service->picture);
            Storage::delete('public/'.$this->category->picture);


            }else{
                dd('File does not exist.');
        }

    }
    public function render()
    {
        return view('livewire.category.edit-category')->layout('layouts.admin-main');
    }
}
