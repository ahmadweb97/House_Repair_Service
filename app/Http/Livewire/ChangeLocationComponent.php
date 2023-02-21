<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ChangeLocationComponent extends Component
{

    public $streetnumber;
    public $road;
    public $city;


    public function changeLocation()
    {
        session()->put('streetnnumber',$this->streetnumber);
        session()->put('road',$this->road);
        session()->put('city',$this->city);

        session()->flash('message','Location has been changed successfully!');
        $this->emitTo('location-component','refreshComponent');
    }

    public function render()
    {
        return view('livewire.change-location-component')->layout('layouts.base');
    }
}
