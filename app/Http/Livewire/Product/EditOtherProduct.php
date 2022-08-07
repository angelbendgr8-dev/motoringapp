<?php

namespace App\Http\Livewire\Product;

use App\Models\OtherProduct;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditOtherProduct extends Component
{

    use WithFileUploads;
    use LivewireAlert;
    public $product,$image;

    protected $rules = [
        'product.status' => 'required',
    ];

    public function changeStatus()
    {
       $this->product->save();
       $this->alert('success', 'Product status updated successfully');
    }

    public function addImage()
    {
        $this->validate([
            'image' => 'image|max:2048', // 1MB Max
        ]);

        $location = $this->image->store('products','public');
        $images = $this->product->images;
        array_push($images,$location);
        $this->product->images = $images;
        $this->product->save();
        $this->alert('success', 'Images added to Product successfully');

    }

    public function mount($id)
    {
        $this->product = OtherProduct::find($id)->with('user')->first();
        // dd($this->product);
    }
    public function render()
    {
        return view('livewire.product.edit-other-product')->layout('layouts.admin-main');
    }
}
