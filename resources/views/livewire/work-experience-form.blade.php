<div>
    <div class="modal-header">
        <h5 class="modal-title">{{ $work ? 'Update' : 'Add' }} Work Experience</h5>
        <span class="pull-right" wire:loading>
            <img src="{{ asset('img/spinner.gif') }}">
        </span>
    </div>
    <form wire:submit="{{ $work ? 'updateWorkExperience' : 'createNewWorkExperience' }}">
        <div class="modal-body">
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group mb-4">
                        <label for="work_dateStart">Start</label>
                        <input type="date" wire:model="work_dateStart" class="form-control id="work_dateStart"
                            placeholder="Start" />
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group mb-3">
                        <label for="work_dateEnd">End</label>
                        <input type="date" wire:model="work_dateEnd" id="work_dateEnd" class="form-control"
                            placeholder="End">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="work_positionTitle">Position Title</label>
                        <input type="text" wire:model="work_positionTitle" class="form-control"
                            id="work_positionTitle" placeholder="Position Title" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="work_Agency">Agency / Company</label>
                        <input type="text" wire:model="work_Agency" class="form-control id="work_Agency"
                            placeholder="Agency / Company" />
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group mb-3">
                        <label for="work_monthlySalary">Monthly Salary</label>
                        <input type="text" wire:model="work_monthlySalary" class="form-control"
                            id="work_monthlySalary" placeholder="Monthly Salary" />
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group mb-3">
                        <label for="work_salaryStep">Salary Step</label>
                        <input type="number" wire:model="work_salaryStep" class="form-control" id="work_salaryStep"
                            placeholder="Salary Step" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group mb-3">
                        <label for="work_status">Status of Appointment</label>
                        <input type="text" wire:model="work_status" class="form-control" id="work_status"
                            placeholder="Status of Appointment" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group mb-3">
                        <label for="work_govService">Government Service</label>
                        <input type="text" wire:model="work_govService" class="form-control" id="work_govService"
                            placeholder="Government Service" />
                        {{-- @error('educ_scholarship')
                            <x-input-error message="{{ $message }}" />
                        @enderror --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" id="close-button" class="btn btn-white shadow" data-bs-dismiss="modal"><i
                    class="far fa-window-close"></i>
                Close</button>
            <button type="submit" id="save" class="btn btn-primary"><i class="far fa-plus"></i> Save
            </button>
        </div>
    </form>
</div>
