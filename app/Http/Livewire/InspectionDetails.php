<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class InspectionDetails extends Component
{
   public $product;

   public function mount($id){
    $this->product = Product::find($id);
    //  dd($this->product);
        }
    public function render()
    {
        return view('livewire.inspection-details')->layout('layouts.admin-main');
    }
}