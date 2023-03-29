<?php

namespace App\Http\Livewire\Inspection;

use Livewire\Component;
use App\Models\CarInspection;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Interior extends Component
{
    use LivewireAlert;
    public $product;
    public $attributes = [
        'Seat_and_arm_rest_upholstery' => "Failed",
        "Dashboard_fittings_center_console" =>"Failed",
        "Roof_upholstery" => "Failed",
        "Door_fittings_trim" => "Failed",
        "Seat_adjuster_function_controls" => "Failed",
    ];
    public function mount(){
        $inspection = CarInspection::whereProductId($this->product->id)->first();
        if($inspection && $inspection->interior){
            $this->attributes = $inspection->interior;
            return;
        }
            $this->attributes = [
                'Seat_and_arm_rest_upholstery' => "Failed",
                "Dashboard_fittings_center_console" =>"Failed",
                "Roof_upholstery" => "Failed",
                "Door_fittings_trim" => "Failed",
                "Seat_adjuster_function_controls" => "Failed",
            ];
        
    }
    public function updateInspect(){
        $inspection = CarInspection::whereProductId($this->product->id)->first();
        if($inspection) {
            $inspection->interior = $this->attributes;
            $inspection->save();
        }else{
            $newInspection = new CarInspection([
                'user_id' => Auth::id(),
                'product_id' => $this->product->id,
                'interior' => $this->attributes,
            ]);
            $newInspection->save();
        }
        $this->alert('success', 'Inspection updated Successfully');
    }
    public function render()
    {
        return view('livewire.inspection.interior');
    }
}