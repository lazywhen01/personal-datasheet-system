<?php

namespace App\Livewire;

use App\Models\EducationalBackground;
use App\Models\PersonalInformation;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class EducationalList extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $personalInformationId;
    public $education;

    #[Rule('string')]
    public $educ_level;

    #[Rule('string')]
    public $educ_schoolName;

    #[Rule('string')]
    public $educ_degreeCourse;

    #[Rule('date')]
    public $educ_degreeStart;

    #[Rule('date')]
    public $educ_degreeEnd;

    #[Rule('string')]
    public $educ_highestLevel;

    #[Rule('date')]
    public $educ_yearGraduated;

    #[Rule('string')]
    public $educ_scholarship;
    public function render()
    {
        $pds = PersonalInformation::find($this->personalInformationId);
        $educationalBackground = $pds->educationalBackground()->latest()->paginate(5);
        return view('livewire.educational-list', compact('educationalBackground'));
    }
    public function openForm()
    {
        $this->resetValidation();
        $this->reset(['educ_level', 'educ_schoolName', 'educ_degreeCourse', 'educ_degreeStart', 'educ_degreeEnd', 'educ_highestLevel', 'educ_yearGraduated', 'educ_scholarship', 'education']);
        $this->dispatch('open-education-form-modal');
    }
    public function createNewEducation()
    {
        $data = $this->validate();

        //store
        $education = new EducationalBackground();
        $education->personal_information_id = $this->personalInformationId;
        $education->educ_level = $data['educ_level'];
        $education->educ_schoolName = $data['educ_schoolName'];
        $education->educ_degreeCourse = $data['educ_degreeCourse'];
        $education->educ_degreeStart = $data['educ_degreeStart'];
        $education->educ_degreeEnd = $data['educ_degreeEnd'];
        $education->educ_highestLevel = $data['educ_highestLevel'];
        $education->educ_yearGraduated = $data['educ_yearGraduated'];
        $education->educ_scholarship = $data['educ_scholarship'];

        //save
        $education->save();

        $this->dispatch('alert', type: 'success', message: 'Educational information has been added.', title: 'Educational Background');
        $this->dispatch('close-education-form-modal');
        $this->reset(['educ_level', 'educ_schoolName', 'educ_degreeCourse', 'educ_degreeStart', 'educ_degreeEnd', 'educ_highestLevel', 'educ_yearGraduated', 'educ_scholarship', 'education']);
    }
    public function showEducation(EducationalBackground $education){
        $this->resetValidation();
        $this->reset(['educ_level', 'educ_schoolName', 'educ_degreeCourse', 'educ_degreeStart', 'educ_degreeEnd', 'educ_highestLevel', 'educ_yearGraduated', 'educ_scholarship', 'education']);
        $this->education = $education;
        $this->educ_level = $education->educ_level;
        $this->educ_schoolName = $education->educ_schoolName;
        $this->educ_degreeCourse = $education->educ_degreeCourse;
        $this->educ_degreeStart = $education->educ_degreeStart;
        $this->educ_degreeEnd = $education->educ_degreeEnd;
        $this->educ_highestLevel = $education->educ_highestLevel;
        $this->educ_yearGraduated = $education->educ_yearGraduated;
        $this->educ_scholarship = $education->educ_scholarship;
        $this->dispatch('open-education-form-modal');
    }
    public function updateEducation(){
        $data = $this->validate();
        $this->education->update($data);
        $this->dispatch('alert', type: 'success', message: 'Educational information has been updated.', title: 'Educational Background');
        $this->dispatch('close-education-form-modal');
    }
    public function openDeleteModal(EducationalBackground $education){
        $this->education = $education;
        $this->dispatch('open-education-delete-modal');
    }
    public function deleteEducation(){
        $this->education->delete();
        $this->dispatch('alert', type: 'success', message: 'Educational background information has been removed.', title: 'Educational Background');
        $this->dispatch('close-education-delete-modal');
    }
}
