<?php

namespace App\Http\Livewire\Inspection;

use Livewire\Component;
use App\Models\CarInspection;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class SuspensionAndSteering extends Component
{


    use LivewireAlert;
    public $product;
    public $attributes = [
        'Power_steering_pump_steering_rack' => "Failed",
        "Drive_shaft_boot" =>"Failed",
        "Turn_steering_wheel_full_from_leftwards_and_righwards" => "Failed",
        "Air_suspension_height_control" => "Failed",
        "Struts_and_lift_springs" => "Failed",
    ];
    public function mount(){
        $inspection = CarInspection::whereProductId($this->product->id)->first();
        if($inspection && $inspection->suspension_and_steering){
            $this->attributes = $inspection->suspension_and_steering;
            return;
        }
            $this->attributes =[
                'Power_steering_pump_steering_rack' => "Failed",
                "Drive_shaft_boot" =>"Failed",
                "Turn_steering_wheel_full_from_leftwards_and_righwards" => "Failed",
                "Air_suspension_height_control" => "Failed",
                "Struts_and_lift_springs" => "Failed",
            ];
       
    }
    public function updateInspect(){
        $inspection = CarInspection::whereProductId($this->product->id)->first();
        if($inspection) {
            $inspection->suspension_and_steering = $this->attributes;
            $inspection->save();
        }else{
            $newInspection = new CarInspection([
                'user_id' => Auth::id(),
                'product_id' => $this->product->id,
                'suspension_and_steering' => $this->attributes,
            ]);
            $newInspection->save();
        }
        $this->alert('success', 'Inspection updated Successfully');
    }
    public function render()
    {
        return view('livewire.inspection.suspension-and-steering');
    }
}
