<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\ServiceProvider;

class AdminServiceProvidersComponent extends Component
{

    use WithPagination;

    public function render()
    {
        $sProviders = ServiceProvider::paginate(10);
        return view('livewire.admin.admin-service-providers-component',['sProviders'=>$sProviders])->layout('layouts.base');
    }
}
