<div>
    <div class="modal-header">
        <h5 class="modal-title">{{ $learning ? 'Update' : 'Add' }} Learning and Development</h5>
        <span class="pull-right" wire:loading>
            <img src="{{ asset('img/spinner.gif') }}">
        </span>
    </div>
    <form wire:submit="{{ $learning ? 'updateLearningDevelopment' : 'createNewLearningDevelopment' }}">
        <div class="modal-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="lnd_title">Training Programs</label>
                        <input type="string" wire:model="lnd_title" class="form-control id="lnd_title"
                            placeholder="Training Programs" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="lnd_start">Start</label>
                        <input type="date" wire:model="lnd_start" id="lnd_start" class="form-control"
                            placeholder="Start">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group mb-3">
                        <label for="lnd_end">End</label>
                        <input type="date" wire:model="lnd_end" class="form-control"
                            id="lnd_end" placeholder="Position Title" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group mb-3">
                        <label for="lnd_numHours">Number of Hours</label>
                        <input type="number" wire:model="lnd_numHours" class="form-control id="lnd_numHours"
                            placeholder="Number of Hours" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group mb-3">
                        <label for="lnd_typeId">Type of Learning and Development</label>
                        <input type="string" wire:model="lnd_typeId" class="form-control"
                            id="lnd_typeId" placeholder="Type of Learning and Development" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="lnd_sponsor">Conducted or Sponsored by:</label>
                        <input type="string" wire:model="lnd_sponsor" class="form-control" id="lnd_sponsor"
                            placeholder="Conducted or Sponsored" />
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" id="close-button" class="btn btn-white shadow" data-bs-dismiss="modal"><i
                    class="far fa-window-close"></i>
                Close</button>
            <button type="submit" id="save" class="btn btn-primary"><i class="far fa-plus"></i> {{ $learning ? 'Update' : 'Add' }}
            </button>
        </div>
    </form>
</div>
