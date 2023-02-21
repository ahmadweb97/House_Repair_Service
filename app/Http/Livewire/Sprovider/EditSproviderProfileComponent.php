<?php

namespace App\Http\Livewire\Sprovider;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Carbon;
use App\Models\ServiceCategory;
use App\Models\ServiceProvider;
use Illuminate\Support\Facades\Auth;

class EditSproviderProfileComponent extends Component
{
    use WithFileUploads;

    public $service_provider_id;
    public $image;
    public $about;
    public $city;
    public $service_category_id;
    public $service_locations;
    public $newimage;

    public function mount()
    {
        $sProvider = ServiceProvider::where('user_id',Auth::user()->id)->first();
        $this->service_provider_id = $sProvider->id;
        $this->image = $sProvider->image;
        $this->about = $sProvider->about;
        $this->city = $sProvider->city;
        $this->service_category_id = $sProvider->service_category_id;
        $this->service_locations = $sProvider->service_locations;
    }

    public function updateProfile()
    {
        $sProvider = ServiceProvider::where('user_id',Auth::user()->id)->first();
        if ($this->newimage) {
            $imageName = Carbon::now()->timestamp.'.'.$this->newimage->extension();
            $this->newimage->storeAs('sproviders',$imageName);
            $sProvider->image = $imageName;
        }

        $sProvider->about = $this->about;
        $sProvider->city = $this->city;
        $sProvider->service_category_id = $this->service_category_id;
        $sProvider->service_locations = $this->service_locations;
        $sProvider->save();

        session()->flash('message','Profile has been updated successfully!');
    }

    public function render()
    {
        $sCategories = ServiceCategory::all();
        return view('livewire.sprovider.edit-sprovider-profile-component',['sCategories'=>$sCategories])->layout('layouts.base');
    }
}
