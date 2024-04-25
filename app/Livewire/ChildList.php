<?php

namespace App\Livewire;

use App\Models\Child;
use App\Models\PersonalInformation;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class ChildList extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $personalInformationId;
    public $child;

    #[Rule('required|string')]
    public $child_firstName;

    #[Rule('required|string')]
    public $child_lastName;

    #[Rule('required|date')]
    public $child_birthDate;

    public function render()
    {
        $pds = PersonalInformation::find($this->personalInformationId);
        $children = $pds->children()->latest()->paginate(5);
        return view('livewire.child-list', compact('children'));
    }

    public function openForm()
    {
        $this->resetValidation();
        $this->reset(['child_firstName', 'child_lastName', 'child_birthDate', 'child']);
        $this->dispatch('open-children-form-modal');
    }

    public function createNewChild()
    {
        $data = $this->validate();

        //store
        $child = new Child();
        $child->personal_information_id = $this->personalInformationId;
        $child->child_firstName = $data['child_firstName'];
        $child->child_lastName = $data['child_lastName'];
        $child->child_birthDate = $data['child_birthDate'];

        //save
        $child->save();

        $this->dispatch('alert', type: 'success', message: 'Child information has been added.', title: 'Child');
        $this->dispatch('close-children-form-modal');
        $this->reset(['child_firstName', 'child_lastName', 'child_birthDate', 'child']);
    }

    public function showChild(Child $child){
        $this->resetValidation();
        $this->reset(['child_firstName', 'child_lastName', 'child_birthDate', 'child']);
        $this->child = $child;
        $this->child_firstName = $child->child_firstName;
        $this->child_lastName = $child->child_lastName;
        $this->child_birthDate = $child->child_birthDate;
        $this->dispatch('open-children-form-modal');
    }
    public function updateChild(){
        $data = $this->validate();
        $this->child->update($data);
        $this->dispatch('alert', type: 'success', message: 'Child information has been updated.', title: 'Child');
        $this->dispatch('close-children-form-modal');
    }
    public function openDeleteModal(Child $child){
        $this->child = $child;
        $this->dispatch('open-children-delete-modal');
    }
    public function deleteChild(){
        $this->child->delete();
        $this->dispatch('alert', type: 'success', message: 'Child information has been removed.', title: 'Child');
        $this->dispatch('close-children-delete-modal');
    }

}
