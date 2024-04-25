<div>
    <div class="modal-header">
        <h5 class="modal-title">{{ $child ? 'Update' : 'Add' }} Child</h5>
        <span class="pull-right" wire:loading>
            <img src="{{ asset('img/spinner.gif') }}">
        </span>
    </div>
    <form wire:submit="{{ $child ? 'updateChild' : 'createNewChild' }}">
        <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="child_firstName">First Name <x-asterisks /> </label>
                        <input type="text" wire:model="child_firstName"
                            class="form-control @error('child_firstName') is-invalid @enderror" id="child_firstName"
                            placeholder="First Name" />
                        @error('child_firstName')
                            <x-input-error message="{{ $message }}" />
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="child_lastName">Last Name <x-asterisks /> </label>
                        <input type="text" wire:model="child_lastName"
                            class="form-control @error('child_lastName') is-invalid @enderror" placeholder="Last Name">
                        @error('child_lastName')
                            <x-input-error message="{{ $message }}" />
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="child_birthDate">Birth Date <x-asterisks /> </label>
                        <input type="date" wire:model="child_birthDate"
                            class="form-control @error('child_birthDate') is-invalid @enderror" placeholder="Birth Date">
                        @error('child_birthDate')
                            <x-input-error message="{{ $message }}" />
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" id="close-button" class="btn btn-white shadow" data-bs-dismiss="modal"><i
                    class="far fa-window-close"></i>
                Close</button>
            <button type="submit" id="save" class="btn btn-primary"><i class="far fa-plus"></i> {{ $child ? 'Update' : 'Save' }}
            </button>
        </div>
    </form>
</div>
