<?php

namespace App\Livewire;

use App\Models\LearningDevelopment;
use App\Models\PersonalInformation;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class LearningDevelopmentList extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $personalInformationId;
    #[Rule('string')]
    public $lnd_title;

    #[Rule('date')]
    public $lnd_start;

    #[Rule('date')]
    public $lnd_end;

    #[Rule('numeric')]
    public $lnd_numHours;

    #[Rule('string')]
    public $lnd_typeId;

    #[Rule('string')]
    public $lnd_sponsor;
    public $learning;
    public function render()
    {
        $pds = PersonalInformation::find($this->personalInformationId);
        $learningDevelopments = $pds->learningDevelopments()->latest()->paginate(5);
        return view('livewire.learning-development-list', compact('learningDevelopments'));
    }
    public function openForm()
    {
        $this->resetValidation();
        $this->reset(['lnd_title', 'lnd_start', 'lnd_end', 'lnd_numHours', 'lnd_typeId', 'lnd_sponsor', 'learning']);
        $this->dispatch('open-learning-form-modal');
    }
    public function createNewLearningDevelopment()
    {
        $data = $this->validate();

        //store
        $learning = new LearningDevelopment();
        $learning->personal_information_id = $this->personalInformationId;
        $learning->lnd_title = $data['lnd_title'];
        $learning->lnd_start = $data['lnd_start'];
        $learning->lnd_end = $data['lnd_end'];
        $learning->lnd_numHours = $data['lnd_numHours'];
        $learning->lnd_typeId = $data['lnd_typeId'];
        $learning->lnd_sponsor = $data['lnd_sponsor'];

        //save
        $learning->save();

        $this->dispatch('alert', type: 'success', message: 'Learning and Development information has been added.', title: 'Learning and Development');
        $this->dispatch('close-learning-form-modal');
        $this->reset(['lnd_title', 'lnd_start', 'lnd_end', 'lnd_numHours', 'lnd_typeId', 'lnd_sponsor', 'learning']);
    }
    public function showLearningDevelopment(LearningDevelopment $learning){
        $this->resetValidation();
        $this->reset(['lnd_title', 'lnd_start', 'lnd_end', 'lnd_numHours', 'lnd_typeId', 'lnd_sponsor', 'learning']);
        $this->learning = $learning;
        $this->lnd_title = $learning->lnd_title;
        $this->lnd_start = $learning->lnd_start;
        $this->lnd_end = $learning->lnd_end;
        $this->lnd_numHours = $learning->lnd_numHours;
        $this->lnd_typeId = $learning->lnd_typeId;
        $this->lnd_sponsor = $learning->lnd_sponsor;
        $this->dispatch('open-learning-form-modal');
    }
    public function updateLearningDevelopment(){
        $data = $this->validate();
        $this->learning->update($data);
        $this->dispatch('alert', type: 'success', message: 'Learning and Development information has been updated.', title: 'Learning and Development');
        $this->dispatch('close-learning-form-modal');
    }
    public function openDeleteModal(LearningDevelopment $learning){
        $this->learning = $learning;
        $this->dispatch('open-learning-delete-modal');
    }
    public function deleteLearningDevelopment(){
        $this->learning->delete();
        $this->dispatch('alert', type: 'success', message: 'Learning and Development information has been updated.', title: 'Learning and Development');
        $this->dispatch('close-learning-delete-modal');
    }
}
