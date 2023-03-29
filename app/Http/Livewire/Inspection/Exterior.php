<?php

namespace App\Http\Livewire\Inspection;

use Livewire\Component;
use App\Models\CarInspection;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Exterior extends Component
{
    use LivewireAlert;
    public $product;
    public $attributes = [
        'Chasis' => "Failed",
        "Body_pillar" =>"Failed",
        "First_body" => "Failed",
        "Engraved" => "Failed",
        "Radiator_core_support" => "Failed",
    ];
    public function mount(){
        $inspection = CarInspection::whereProductId($this->product->id)->first();

        if($inspection && $inspection->exterior !== null ){

            $this->attributes = $inspection->exterior;
            return;
        }

            $this->attributes = [
                'Chasis' => "Failed",
                "Body_pillar" =>"Failed",
                "First_body" => "Failed",
                "Engraved" => "Failed",
                "Radiator_core_support" => "Failed",
            ];

    }
    public function updateInspect(){
        $inspection = CarInspection::whereProductId($this->product->id)->first();
        if($inspection) {
            $inspection->exterior = $this->attributes;
            $inspection->save();
        }else{
            $newInspection = new CarInspection([
                'user_id' => Auth::id(),
                'product_id' => $this->product->id,
                'exterior' => $this->attributes,
            ]);
            $newInspection->save();
        }
        $this->alert('success', 'Inspection updated Successfully');
    }
    public function render()
    {
        return view('livewire.inspection.exterior');
    }
}
