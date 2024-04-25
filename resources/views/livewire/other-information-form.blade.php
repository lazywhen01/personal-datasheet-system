<div>
    <div class="modal-header">
        <h5 class="modal-title">{{ $other ? 'Update' : 'Add' }} Other Information</h5>
        <span class="pull-right" wire:loading>
            <img src="{{ asset('img/spinner.gif') }}">
        </span>
    </div>
    <form wire:submit="{{ $other ? 'updateOtherInformation' : 'createNewOtherInformation' }}">
        <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="other_category">Category</label>
                        <select type="text" wire:model="other_category" class="form-select" id="other_category">
                            <option>Choose an option</option>
                            <option value="Skills and Hobby">Skills and Hobby</option>
                            <option value="Non-academic Distinctions / Recognition">Non-academic Distinctions / Recognition</option>
                            <option value="Association Membership">Association Membership</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="other_title">Title</label>
                        <input type="text" wire:model="other_title" id="other_title" class="form-control"
                            placeholder="Title" value="{{ $other_title }}">
                    </div>
                </div>
            </div>
        </div>
</div>
<div class="modal-footer">
    <button type="button" id="close-button" class="btn btn-white shadow" data-bs-dismiss="modal"><i
            class="far fa-window-close"></i>
        Close</button>
    <button type="submit" id="save" class="btn btn-primary"><i class="far fa-plus"></i>
        {{ $other ? 'Update' : 'Add' }}
    </button>
</div>
</form>
</div>
