<?php

namespace App\Http\Livewire\Product;

use App\Models\Product as ModelsProduct;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class Product extends Component
{
    use WithPagination;
    // public $cars,$products;
    public function mount()
    {
        // $cars = ModelsProduct::latest()->paginate(10);
        // dd($cars);

        // $this->products = DB::table('other_products')->paginate(10);

    }
    public function getCars()
    {
        return ModelsProduct::latest()->paginate(10);
    }
    public function render()
    {
        return view('livewire.product.product',[

            'cars' => $this->getCars()

        ])->layout('layouts.admin-main');
    }
}
