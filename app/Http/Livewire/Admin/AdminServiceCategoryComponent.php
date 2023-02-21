<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\ServiceCategory;

class AdminServiceCategoryComponent extends Component
{

    use WithPagination;

    public function deleteServiceCategory($id)
    {
        $sCategory = ServiceCategory::find($id);
        if ($sCategory->image) {
            unlink('images/categories'.'/'.$sCategory->image);
        }
        $sCategory->delete();
        session()->flash('message', 'Service Category has been deleted successfully!');
    }
    public function render()
    {
        $sCategory = ServiceCategory::paginate(10);

        return view('livewire.admin.admin-service-category-component',
        ['sCategory' => $sCategory])->layout('layouts.base');
    }
}
