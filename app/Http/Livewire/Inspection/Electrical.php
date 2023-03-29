<?php

namespace App\Http\Livewire\Inspection;

use Livewire\Component;
use App\Models\CarInspection;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Electrical extends Component
{
    use LivewireAlert;
    public $product;
    public $attributes = [
        'Dtc_on_instrument_cluster' => "Failed",
        "Wiring_harness_fuse_box_power_module" =>"Failed",
        "Abs" => "Failed",
        "Air_bag" => "Failed",
        "Transmission_electrical_malfunction"=>'Failed',
    ];
    public function mount(){
        $inspection = CarInspection::whereProductId($this->product->id)->first();
        if($inspection && $inspection->electricals){
            $this->attributes = $inspection->electricals;
            return;
        }
            $this->attributes = [
                'Dtc_on_instrument_cluster' => "Failed",
                "Wiring_harness_fuse_box_power_module" =>"Failed",
                "Abs" => "Failed",
                "Air_bag" => "Failed",
                "Transmission_electrical_malfunction"=>'Failed',
            ];

    }
    public function updateInspect(){
        $inspection = CarInspection::whereProductId($this->product->id)->first();
        if($inspection) {
            $inspection->electricals = $this->attributes;
            $inspection->save();
        }else{
            $newInspection = new CarInspection([
                'user_id' => Auth::id(),
                'product_id' => $this->product->id,
                'electricals' => $this->attributes,
            ]);
            $newInspection->save();
        }
        $this->alert('success', 'Inspection updated Successfully');
    }

    public function render()
    {
        return view('livewire.inspection.electrical');
    }
}
