<?php

namespace App\Http\Livewire\Inspection;

use Livewire\Component;
use App\Models\CarInspection;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class EngineInspection extends Component
{
    use LivewireAlert;
    public $product;
    public $attributes = [
        "Start_the_engine" => "Failed",
        "No_engine_noise_crank_shaft_bearings_Knocking_metal_bearing" =>"Failed",
        "smoke_in_exhaust" => "Failed",
        "Engine_misfiring" => "Failed",
        "Arm_or_head_rest_upholstery"=>"Failed",
    ];
    public function mount(){
        $inspection = CarInspection::whereProductId($this->product->id)->first();
        if($inspection && $inspection->engines){
            $this->attributes = $inspection->engines;
            //  dd($this->attributes);
            return;
        }
            $this->attributes = [
                'Start_the_engine' => "Failed",
                "No_engine_noise_crank_shaft_bearings_Knocking_metal_bearing" =>"Failed",
                "smoke_in_exhaust" => "Failed",
                "Engine_misfiring" => "Failed",
                "Arm_or_head_rest_upholstery"=>"Failed",
            ];

    }
    public function updateInspect(){
        $inspection = CarInspection::whereProductId($this->product->id)->first();
        if($inspection) {
            $inspection->engines = $this->attributes;
            $inspection->save();
        }else{
            $newInspection = new CarInspection([
                'user_id' => Auth::id(),
                'product_id' => $this->product->id,
                'engines' => $this->attributes,
            ]);
            dd($this->attributes);
            $newInspection->save();
        }
        $this->alert('success', 'Inspection updated Successfully');
    }


    public function render()
    {
        return view('livewire.inspection.engine-inspection');
    }
}
