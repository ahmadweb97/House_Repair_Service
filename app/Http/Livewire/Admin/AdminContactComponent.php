<?php

namespace App\Http\Livewire\Admin;

use App\Models\Contact;
use Livewire\Component;
use Livewire\WithPagination;

class AdminContactComponent extends Component
{
    use WithPagination;

    public function deleteContactMessage($id)
    {
        $contacts = Contact::find($id);

        $contacts->delete();
        session()->flash('message', 'Contact message has been deleted successfully!');
    }

    public function render()
    {
        $contacts = Contact::paginate(10);
        return view('livewire.admin.admin-contact-component',['contacts'=>$contacts])->layout('layouts.base');
    }
}
