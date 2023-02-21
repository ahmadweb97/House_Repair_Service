<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ServiceCategory;

class ServiceCategoriesComponent extends Component
{
    public function render()
    {
        $sCategory = ServiceCategory::all();
        return view('livewire.service-categories-component', ['sCategory'=>$sCategory])->layout('layouts.base');
    }
}
