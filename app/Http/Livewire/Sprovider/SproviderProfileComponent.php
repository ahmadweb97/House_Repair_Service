<?php

namespace App\Http\Livewire\Sprovider;

use Livewire\Component;
use App\Models\ServiceProvider;
use Illuminate\Support\Facades\Auth;

class SproviderProfileComponent extends Component
{
    public function render()
    {
        $sProvider = ServiceProvider::where('user_id',Auth::user()->id)->first();

        return view('livewire.sprovider.sprovider-profile-component',['sProvider'=>$sProvider])->layout('layouts.base');
    }
}
