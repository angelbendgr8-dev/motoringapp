<?php

namespace App\Http\Livewire\Product;

use App\Models\OtherProduct as ModelsOtherProduct;
use Livewire\Component;
use Livewire\WithPagination;

class OtherProduct extends Component
{
    use WithPagination;
    // public $cars,$products;
    public function mount()
    {
        // $cars = ModelsOtherProduct::latest()->paginate(10);
        // dd($cars);

        // $this->products = DB::table('other_products')->paginate(10);

    }
    public function getProducts()
    {
        return ModelsOtherProduct::latest()->paginate(10);
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
    public function render()
    {
        return view('livewire.product.other-product',[

            'products' => $this->getProducts()

        ])->layout('layouts.admin-main');
    }
}