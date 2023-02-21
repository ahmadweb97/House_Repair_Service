<?php

namespace App\Http\Livewire;

use App\Models\Slider;
use App\Models\Service;
use Livewire\Component;
use App\Models\ServiceCategory;

class HomeComponent extends Component
{
    public function render()
    {
        $sCategories = ServiceCategory::inRandomOrder()->take(18)->get();
        $fServices = Service::where('featured',1)->inRandomOrder()->take(8)->get();
        $fsCategories = ServiceCategory::where('featured',1)->take(8)->get();
        $serviceId = ServiceCategory::whereIn('slug',['ac','tv','refrigerator','geyser','water-purifier', 'pest-control','home-automation','painting','home-cleaning','movers-packers','plumbing','laundry'])->get()->pluck('id');
        $aServices = Service::whereIn('service_category_id',$serviceId)->inRandomOrder()->take(12)->get();
        $slides = Slider::where('status',1)->get();

        return view('livewire.home-component',['sCategories'=>$sCategories,'fServices'=>$fServices,'fsCategories'=>$fsCategories,'aServices'=>$aServices,'slides'=>$slides])->layout('layouts.base');
    }

}
