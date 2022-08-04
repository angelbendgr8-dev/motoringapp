<?php

namespace App\Http\Livewire\CarBrand;

use App\Models\CarBrand;
use Livewire\Component;
use Livewire\WithPagination;

class ViewBrands extends Component
{
    // public $brands;
    use WithPagination;

    public function deleteBrand($id){
        CarBrand::whereId($id)->delete();
        return redirect(request()->header('Referer'));
    }

    public function render()
    {
        return view('livewire.car-brand.view-brands',[
            'brands' => CarBrand::paginate(10),
        ])->layout('layouts.admin-main');
    }
}
