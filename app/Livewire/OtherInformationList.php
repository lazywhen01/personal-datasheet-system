<?php

namespace App\Livewire;

use App\Models\OtherInformation;
use App\Models\PersonalInformation;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class OtherInformationList extends Component
{
     use WithPagination;
     protected $paginationTheme = 'bootstrap';
     public $personalInformationId;
     public $other;

    #[Rule('string')]
     public $other_category;

     #[Rule('string')]
     public $other_title;
    public function render()
    {   
        $pds = PersonalInformation::find($this->personalInformationId);
        $otherInformation = $pds->otherInformation()->latest()->paginate(5);
        return view('livewire.other-information-list', compact('otherInformation'));
    }

    public function openForm(){
        $this->resetValidation();
        $this->reset(['other_category', 'other_title', 'other']);
        $this->dispatch('open-other-form-modal');
    }
    public function createNewOtherInformation()
    {
        $data = $this->validate();

        //store
        $other = new OtherInformation();
        $other->personal_information_id = $this->personalInformationId;
        $other->other_category = $data['other_category'];
        $other->other_title = $data['other_title'];

        //save
        $other->save();

        $this->dispatch('alert', type: 'success', message: 'Other information has been added.', title: 'Other Information');
        $this->dispatch('close-other-form-modal');
        $this->reset(['other_category', 'other_title', 'other']);
    }
    public function showOtherInformation(OtherInformation $other){
        $this->resetValidation();
        $this->reset(['other_category', 'other_title', 'other']);
        $this->other = $other;
        $this->other_category = $other->other_category;
        $this->other_title = $other->other_title;
        $this->dispatch('open-other-form-modal');
    }
    public function updateOtherInformation(){
        $data = $this->validate();
        $this->other->update($data);
        $this->dispatch('alert', type: 'success', message: 'Other information has been updated.', title: 'Other Information');
        $this->dispatch('close-other-form-modal');
    }
    public function openDeleteModal(OtherInformation $other){
        $this->other = $other;
        $this->dispatch('open-other-delete-modal');
    }
    public function deleteOtherInformation(){
        $this->other->delete();
        $this->dispatch('alert', type: 'success', message: 'Other information has been removed.', title: 'Other Information');
        $this->dispatch('close-other-delete-modal');
    }

}
