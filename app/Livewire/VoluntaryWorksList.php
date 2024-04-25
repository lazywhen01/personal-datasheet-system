<?php

namespace App\Livewire;

use App\Models\PersonalInformation;
use App\Models\VoluntaryWork;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class VoluntaryWorksList extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $personalInformationId;
    public $voluntaryWork;

    #[Rule('string')]
    public $voluntary_orgName;

    #[Rule('string')]
    public $voluntary_orgAddress;

    #[Rule('date')]
    public $voluntary_Start;

    #[Rule('date')]
    public $voluntary_End;
    #[Rule('numeric')]
    public $voluntary_numHours;
    #[Rule('string')]
    public $voluntary_positionWork;
    public function render()
    {
        $pds = PersonalInformation::find($this->personalInformationId);
        $voluntaryWorks = $pds->voluntaryWorks()->latest()->paginate(5);
        return view('livewire.voluntary-works-list', compact('voluntaryWorks'));
    }
    public function openForm()
    {
        $this->resetValidation();
        $this->reset(['voluntary_orgName', 'voluntary_orgAddress', 'voluntary_Start', 'voluntary_End', 'voluntary_numHours', 'voluntary_positionWork', 'voluntaryWork']);
        $this->dispatch('open-voluntary-form-modal');
    }
    public function createNewVoluntaryWork()
    {
        
        $data = $this->validate();
        //store
        $voluntary = new VoluntaryWork();

        $voluntary->personal_information_id = $this->personalInformationId;
        $voluntary->voluntary_orgName = $data['voluntary_orgName'];
        $voluntary->voluntary_orgAddress = $data['voluntary_orgAddress'];
        $voluntary->voluntary_Start = $data['voluntary_Start'];
        $voluntary->voluntary_End = $data['voluntary_End'];
        $voluntary->voluntary_numHours = $data['voluntary_numHours'];
        $voluntary->voluntary_positionWork = $data['voluntary_positionWork'];

        //save
        $voluntary->save();

        $this->dispatch('alert', type: 'success', message: 'Voluntary Works information has been added.', title: 'Voluntary Works');
        $this->dispatch('close-voluntary-form-modal');
        $this->reset(['voluntary_orgName', 'voluntary_orgAddress', 'voluntary_Start', 'voluntary_End', 'voluntary_numHours', 'voluntary_positionWork', 'voluntaryWork']);
    }
    public function showVoluntaryWork(VoluntaryWork $voluntaryWork){
        $this->resetValidation();
        $this->reset(['voluntary_orgName', 'voluntary_orgAddress', 'voluntary_Start', 'voluntary_End', 'voluntary_numHours', 'voluntary_positionWork', 'voluntaryWork']);
        $this->voluntaryWork = $voluntaryWork;
        $this->voluntary_orgName = $voluntaryWork->voluntary_orgName;
        $this->voluntary_orgAddress = $voluntaryWork->voluntary_orgAddress;
        $this->voluntary_Start = $voluntaryWork->voluntary_Start;
        $this->voluntary_End = $voluntaryWork->voluntary_End;
        $this->voluntary_numHours = $voluntaryWork->voluntary_numHours;
        $this->voluntary_positionWork = $voluntaryWork->voluntary_positionWork;
        $this->dispatch('open-voluntary-form-modal');
    }
    public function updateVoluntaryWork(){
        $data = $this->validate();
        $this->voluntaryWork->update($data);
        $this->dispatch('alert', type: 'success', message: 'Voluntary Works information has been updated.', title: 'Voluntary Works');
        $this->dispatch('close-voluntary-form-modal');
    }
    public function openDeleteModal(VoluntaryWork $voluntaryWork){
        $this->voluntaryWork = $voluntaryWork;
        $this->dispatch('open-voluntary-delete-modal');
    }
    public function deleteVoluntaryWork(){
        $this->voluntaryWork->delete();
        $this->dispatch('alert', type: 'success', message: 'Voluntary Works information has been deleted.', title: 'Voluntary Works');
        $this->dispatch('close-voluntary-delete-modal');
    }
}
