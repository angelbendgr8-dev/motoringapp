<?php

namespace App\Http\Livewire\Inspection;

use Livewire\Component;
use App\Models\CarInspection;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class TransmissionAndClutch extends Component
{
    use LivewireAlert;
    public $product;
    public $attributes = [];
    public function mount(){
        $inspection = CarInspection::whereProductId($this->product->id)->first();
        if($inspection && $inspection->transmission_and_clutch){
            $this->attributes = $inspection->transmission_and_clutch;
            return;
        }
            $this->attributes =[
                'Oil_leakage_condition' => "Failed",
                "Gear_mount" =>"Failed",
                "Clutch_operation" => "Failed",
            ];
        
    }
    public function updateInspect(){
        $inspection = CarInspection::whereProductId($this->product->id)->first();
        if($inspection) {
            $inspection->transmission_and_clutch = $this->attributes;
            $inspection->save();
        }else{
            $newInspection = new CarInspection([
                'user_id' => Auth::id(),
                'product_id' => $this->product->id,
                'transmission_and_clutch' => $this->attributes,
            ]);
            $newInspection->save();
        }
        $this->alert('success', 'Inspection updated Successfully');
    }
    public function render()
    {
        return view('livewire.inspection.transmission-and-clutch');
    }
}