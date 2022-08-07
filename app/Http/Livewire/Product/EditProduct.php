<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;

class EditProduct extends Component
{
    public Product $product;

    public function mount()
    {
        dd($this->product);
    }
    public function render()
    {
        return view('livewire.product.edit-product')->layout('layouts.main');
    }
}
