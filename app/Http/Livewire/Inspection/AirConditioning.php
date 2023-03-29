<?php

namespace App\Http\Livewire\Inspection;

use Livewire\Component;
use App\Models\CarInspection;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class AirConditioning extends Component
{
    use LivewireAlert;
    public $product;
    public $attributes = [
        'Cooling performance' => "Failed",
        "Compressor" =>"Failed",
        "Other_control_button_knob" => "Failed",
        "repair_history" => "Failed",
    ];
    public function mount(){
        $inspection = CarInspection::whereProductId($this->product->id)->first();
        if($inspection && $inspection->air_conditioning){
            $this->attributes = $inspection->air_conditioning;
           
            return;
        }
        $this->attributes = [
            'Cooling performance' => "Failed",
            "Compressor" =>"Failed",
            "Other_control_button_knob" => "Failed",
            "repair_history" => "Failed",
        ];
    }
    public function updateInspect(){
        $inspection = CarInspection::whereProductId($this->product->id)->first();
        if($inspection) {
            $inspection->air_conditioning = $this->attributes;
            $inspection->save();
        }else{
            $newInspection = new CarInspection([
                'user_id' => Auth::id(),
                'product_id' => $this->product->id,
                'air_conditioning' => $this->attributes,
            ]);
            $newInspection->save();
        }
        $this->alert('success', 'Inspection updated Successfully');
    }
    public function render()
    {
        return view('livewire.inspection.air-conditioning');
    }
}
