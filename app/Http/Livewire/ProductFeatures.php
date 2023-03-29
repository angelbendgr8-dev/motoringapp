<?php

namespace App\Http\Livewire;

use App\Models\Feature;
use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class ProductFeatures extends Component
{
    public $product,$features,$optionsFeatures,$product_features,$selected;
    public function mount(Product $product){
       $this->features =Feature::all()->toArray();
       $this->optionsFeatures = $this->features;

       if($product->features){
        $feats = $product->features;
        // $sels=;


        foreach ($feats as $key => $value) {

            $curr = array_filter($this->optionsFeatures,function($temp) use($value){
                return $temp['name'] !== $value['name'];
                    // dd($value['name']);


            });
            $this->optionsFeatures = $curr;

        }
        $this->optionsFeatures = collect(array_values($this->optionsFeatures));

       }else{
        $this->optionsFeatures = collect($this->features);
       }

    }
    public function addFeature(){
        // dd($this->selected);

        $values = array_values($this->selected);
        $sels = [];
        $newFeatures = DB::table('features')->select('name','icon')->get();
        foreach ($values as $key => $value) {
            // dd($key);
            $curr = array_filter($newFeatures->toArray(), function($temp) use($value){

                return $temp->name === $value;
            });
            // array_values($curr);
            // dd($curr);
            array_push($sels,array_values($curr)[0]);
        }
        // dd($sels);
        $current_feat = $this->product->features;
        $this->product->features = array_merge($current_feat,$sels);
        $this->product->save();
        return redirect(request()->header('Referer'));

    }
    public function deleteFeature($feature){
        // dd($this->selected);

        $selected = $this->product->features[$feature];
        $newFeatures = array_filter($this->product->features,function($value) use ($selected) {
            return $value !== $selected;
        });
        $this->product->features = $newFeatures;
        $this->product->save();
        return redirect(request()->header('Referer'));

    }
    public function render()
    {
        return view('livewire.product-features')->layout('layouts.admin-main');
    }
}