<?php

namespace App\Http\Livewire\Request;

use App\Models\ServiceRequest;
use Livewire\Component;
use Livewire\WithPagination;

class ViewRequests extends Component
{

    use WithPagination;
    // public $cars,$products;
    public function mount()
    {
        // $cars = ModelsProduct::latest()->paginate(10);
        // dd($cars);

        // $this->products = DB::table('other_products')->paginate(10);

    }
    public function getRequests()
    {
        return ServiceRequest::with('service')->paginate(10);
    }
    public function render()
    {
        return view('livewire.request.view-requests',[
            'requests' => $this->getRequests()
        ])->layout('layouts.admin-main');
    }
}
