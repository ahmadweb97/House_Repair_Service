<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Carbon;
use App\Models\ServiceCategory;

class AdminEditServiceCategoryComponent extends Component
{
    use WithFileUploads;

    public $category_id;
    public $name;
    public $slug;
    public $image;
    public $newImage;
    public $featured;


    public function mount($category_id)
    {
        $sCategory = ServiceCategory::find($category_id);
        $this->category_id = $sCategory->id;
        $this->name = $sCategory->name;
        $this->slug = $sCategory->slug;
        $this->image = $sCategory->image;
        $this->featured = $sCategory->featured;

    }

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name,'-');
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required',
            'slug' => 'required',
        ]);

        if ($this->newImage) {

            $this->validateOnly($fields, [
           'newImage' => 'required|mimes:jpeg,jpg,png'
            ]);
        }

    }

    public function updateServiceCategory()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);

        if ($this->newImage) {
            $this->validate([
                'newImage' => 'required|mimes:jpeg,jpg,png'
            ]);

        }

        $sCategory = ServiceCategory::find($this->category_id);
        $sCategory->name = $this->name;
        $sCategory->slug = $this->slug;
        if ($this->newImage) {
            $imageName = Carbon::now()->timestamp . '.' . $this->newImage->extension();
            $this->newImage->StoreAs('categories', $imageName);
            $sCategory->image = $imageName;
        }
        $sCategory->featured = $this->featured;
        $sCategory->save();
        session()->flash('message', 'Category has been updated successfully!');
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-service-category-component')->layout('layouts.base');
    }
}
