<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditProduct extends Component
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
    public function deleteImage($image)
    {
    //    dd($image);
        $selected = $this->product->images[$image];
        $newImage = array_filter($this->product->images,function($value) use ($selected) {
            return $value !== $selected;
        });
        $this->product->images = $newImage;
        $this->product->save();
        // dd($newImage);
    }

    public function mount($id)
    {

        $this->product = Product::whereId($id)->with('user')->first();
        // dd($this->product);
    }
    public function render()
    {
        return view('livewire.product.edit-product')->layout('layouts.admin-main');
    }
}
