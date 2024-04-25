<div>
    <div class="modal-header">
        <h5 class="modal-title">{{ $voluntaryWork ? 'Update' : 'Add' }} Voluntary Work</h5>
        <span class="pull-right" wire:loading>
            <img src="{{ asset('img/spinner.gif') }}">
        </span>
    </div>
    <form wire:submit="{{ $voluntaryWork ? 'updateVoluntaryWork' : 'createNewVoluntaryWork' }}">
        <div class="modal-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="voluntary_orgName">Organization Name</label>
                        <input type="string" wire:model="voluntary_orgName" class="form-control id="voluntary_orgName"
                            placeholder="Organization Name" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="voluntary_orgAddress">Organization Address</label>
                        <input type="string" wire:model="voluntary_orgAddress" id="voluntary_orgAddress" class="form-control"
                            placeholder="Organization Address">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group mb-3">
                        <label for="voluntary_Start">Start</label>
                        <input type="date" wire:model="voluntary_Start" class="form-control"
                            id="voluntary_Start" placeholder="Position Title" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group mb-3">
                        <label for="voluntary_End">End</label>
                        <input type="date" wire:model="voluntary_End" class="form-control id="voluntary_End"
                            placeholder="Agency / Company" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group mb-3">
                        <label for="voluntary_numHours">Number of Hours</label>
                        <input type="number" wire:model="voluntary_numHours" class="form-control"
                            id="voluntary_numHours" placeholder="Number of Hours" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="voluntary_positionWork">Position or Nature of Work</label>
                        <input type="string" wire:model="voluntary_positionWork" class="form-control" id="voluntary_positionWork"
                            placeholder="Position or Nature of Work" />
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" id="close-button" class="btn btn-white shadow" data-bs-dismiss="modal"><i
                    class="far fa-window-close"></i>
                Close</button>
            <button type="submit" id="save" class="btn btn-primary"><i class="far fa-plus"></i> {{ $voluntaryWork ? 'Update' : 'Add' }}
            </button>
        </div>
    </form>
</div>
