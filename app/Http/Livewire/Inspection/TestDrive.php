<?php

namespace App\Http\Livewire\Inspection;

use Livewire\Component;
use App\Models\CarInspection;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class TestDrive extends Component
{
    use LivewireAlert;
    public $product;
    public $attributes = [
        "Jerk_surge_in_motion" => "Failed",
        "Gear_shift_movement" =>"Failed",
        "Suspension_noise" => "Failed",
        "Braking_efficiency_and_performance" => "Failed",
        "Overheating" => "Failed",
    ];
    public function mount(){
        $inspection = CarInspection::whereProductId($this->product->id)->first();
        if($inspection && $inspection->test_drive){
            $this->attributes = $inspection->test_drive;
            // dd($this->attributes);
            return;
        }
            $this->attributes =[
                'Jerk_surge_in_motion' => "Failed",
                "Gear_shift_movement" =>"Failed",
                "Suspension_noise" => "Failed",
                "Braking_efficiency_and_performance" => "Failed",
                "Overheating" => "Failed",
            ];

    }
    public function updateInspect(){
        $inspection = CarInspection::whereProductId($this->product->id)->first();
        if($inspection) {
            $inspection->test_drive = $this->attributes;
            $inspection->save();
        }else{
            $newInspection = new CarInspection([
                'user_id' => Auth::id(),
                'product_id' => $this->product->id,
                'test_drive' => $this->attributes,
            ]);
            // dd($this->attributes);
            $newInspection->save();
        }
        $this->alert('success', 'Inspection updated Successfully');
    }
    public function render()
    {
        return view('livewire.inspection.test-drive');
    }
}