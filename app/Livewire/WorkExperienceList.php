<?php

namespace App\Livewire;

use App\Models\PersonalInformation;
use App\Models\WorkExperience;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class WorkExperienceList extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $personalInformationId;
    public $work;

    #[Rule('date')]
    public $work_dateStart;

    #[Rule('date')]
    public $work_dateEnd;

    #[Rule('string')]
    public $work_positionTitle;

    #[Rule('string')]
    public $work_Agency;

    #[Rule('string')]
    public $work_monthlySalary;

    #[Rule('numeric')]
    public $work_salaryStep;

    #[Rule('string')]
    public $work_status;

    #[Rule('string')]
    public $work_govService;
    public function render()
    {
        $pds = PersonalInformation::find($this->personalInformationId);
        $workExperience = $pds->workExperience()->latest()->paginate(5);
        return view('livewire.work-experience-list', compact('workExperience'));
    }
    public function openForm()
    {
        $this->resetValidation();
        $this->reset(['work_dateStart', 'work_dateEnd', 'work_positionTitle', 'work_Agency', 'work_monthlySalary', 'work_salaryStep', 'work_status', 'work_govService', 'work']);
        $this->dispatch('open-work-form-modal');
    }
    public function createNewWorkExperience()
    {
        $data = $this->validate();
        //store
        $work = new WorkExperience();
        $work->personal_information_id = $this->personalInformationId;
        $work->work_dateStart = $data['work_dateStart'];
        $work->work_dateEnd = $data['work_dateEnd'];
        $work->work_positionTitle = $data['work_positionTitle'];
        $work->work_Agency = $data['work_Agency'];
        $work->work_monthlySalary = $data['work_monthlySalary'];
        $work->work_salaryStep = $data['work_salaryStep'];
        $work->work_status = $data['work_status'];
        $work->work_govService = $data['work_govService'];

        //save
        $work->save();

        $this->dispatch('alert', type: 'success', message: 'Work experience has been added.', title: 'Work Experience');
        $this->dispatch('close-work-form-modal');
        $this->reset(['work_dateStart', 'work_dateEnd', 'work_positionTitle', 'work_Agency', 'work_monthlySalary', 'work_salaryStep', 'work_status', 'work_govService', 'work']);
    }
    public function showWorkExperience(WorkExperience $workExperience)
    {
        $this->resetValidation();
        $this->reset(['work_dateStart', 'work_dateEnd', 'work_positionTitle', 'work_Agency', 'work_monthlySalary', 'work_salaryStep', 'work_status', 'work_govService', 'work']);
        $this->work = $workExperience;
        $this->work_dateStart = $workExperience->work_dateStart;
        $this->work_dateEnd = $workExperience->work_dateEnd;
        $this->work_positionTitle = $workExperience->work_positionTitle;
        $this->work_Agency = $workExperience->work_Agency;
        $this->work_monthlySalary = $workExperience->work_monthlySalary;
        $this->work_salaryStep = $workExperience->work_salaryStep;
        $this->work_status = $workExperience->work_status;
        $this->work_govService = $workExperience->work_govService;
        $this->dispatch('open-work-form-modal');
    }
    public function updateWorkExperience()
    {
        $data = $this->validate();
        $this->work->update($data);
        $this->dispatch('alert', type: 'success', message: 'Work experience information has been updated.', title: 'Work Experience');
        $this->dispatch('close-work-form-modal');
    }
    public function openDeleteModal(WorkExperience $work)
    {
        $this->work = $work;
        $this->dispatch('open-work-delete-modal');
    }
    public function deleteWorkExperience()
    {
        $this->work->delete();
        $this->dispatch('alert', type: 'success', message: 'Work experience information has been removed.', title: 'Work Experience');
        $this->dispatch('close-work-delete-modal');
    }
}
