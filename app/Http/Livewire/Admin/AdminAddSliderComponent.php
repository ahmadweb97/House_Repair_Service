<?php

namespace App\Http\Livewire\Admin;

use App\Models\Slider;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Carbon;

class AdminAddSliderComponent extends Component
{
    use WithFileUploads;
    public $title;
    public $image;
    public $status=0;

    public function update($fields)
    {
        $this->validateOnly($fields,[
            'title' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png',
        ]);
    }

    public function addNewSlide()
    {
       $this->validate([
        'title' => 'required',
        'image' => 'required|mimes:jpg,jpeg,png',
       ]);
       $slide = new Slider();
       $slide->title = $this->title;

       $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
       $this->image->storeAs('slider',$imageName);
       $slide->image = $imageName;
       $slide->status = $this->status;
       $slide->save();

       session()->flash('message','Slide has been created successfully!');
    }

    
    public function render()
    {
        return view('livewire.admin.admin-add-slider-component')->layout('layouts.base');
    }
}
