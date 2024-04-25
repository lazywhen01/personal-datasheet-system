<div>
    <div class="modal-header">
        <h5 class="modal-title">{{ $education ? 'Update' : 'Add' }} Educational Background</h5>
        <span class="pull-right" wire:loading>
            <img src="{{ asset('img/spinner.gif') }}">
        </span>
    </div>
    <form wire:submit="{{ $education ? 'updateEducation' : 'createNewEducation' }}">
        <div class="modal-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group mb-4">
                        <label for="educ_level">School Level</label>
                        <input type="text" wire:model="educ_level" class="form-control id="educ_level"
                            placeholder="School Level" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group mb-3">
                        <label for="educ_schoolName">School Name</label>
                        <input type="text" wire:model="educ_schoolName" id="educ_schoolName" class="form-control"
                            placeholder="School Name">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group mb-3">
                        <label for="educ_degreeCourse">Degree Course</label>
                        <input type="text" wire:model="educ_degreeCourse" max="{{ date('Y-m-d', time()) }}"
                            class="form-control" id="educ_degreeCourse" placeholder="Degree Course" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group mb-3">
                        <label for="educ_degreeStart">Degree Start</label>
                        <input type="date" wire:model="educ_degreeStart" class="form-control id="educ_degreeStart"
                            placeholder="Degree Start" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group mb-3">
                        <label for="educ_degreeEnd">Degree End</label>
                        <input type="date" wire:model="educ_degreeEnd" class="form-control" id="educ_degreeEnd"
                            placeholder="Degree End" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group mb-3">
                        <label for="educ_highestLevel">Highest Level</label>
                        <input type="text" wire:model="educ_highestLevel" class="form-control" id="educ_highestLevel"
                            placeholder="Highest Level" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="educ_yearGraduated">Year Graduated</label>
                        <input type="date" wire:model="educ_yearGraduated" class="form-control"
                            id="educ_yearGraduated" placeholder="Year Graduated" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="educ_scholarship">Scholarship Academic/Honors Recieved</label>
                        <input type="text" wire:model="educ_scholarship" class="form-control" id="educ_scholarship"
                            placeholder="Scholarship Academic Honors Recieved" />
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
            <button type="submit" id="save" class="btn btn-primary"><i class="far fa-plus"></i> {{ $education ? 'Update' : 'Save' }}
            </button>
        </div>
    </form>
</div>
