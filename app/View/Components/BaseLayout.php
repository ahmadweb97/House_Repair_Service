<?php

namespace App\View\Components;

use App\Models\Slider;
use App\Models\Service;
use Illuminate\View\View;
use Illuminate\View\Component;
use App\Models\ServiceCategory;
class BaseLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('layouts.base');
    }
}
