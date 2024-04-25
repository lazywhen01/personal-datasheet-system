<div class="row">
    <div class="col-12 col-xl-12">
        <div class="card-header border-bottom d-flex align-items-center justify-content-between">
            <h3 class="fs-5 fw-bold mb-0">Learning and Development</h3>
            <button type="button" class="btn btn-sm btn-primary animate-up-2" wire:click="openForm"><i
                    class="far fa-plus"></i>
                Add Learning and Development</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-centered table-nowrap rounded">
                    <thead class="thead-light">
                        <tr>
                            <th class="rounded-start">Training Programs</th>
                            <th>Start</th>
                            <th>End</th>
                            <th>Number of Hours</th>
                            <th>Type of Learning and Development</th>
                            <th>Conducted or Sponsored by:</th>
                            <th class="rounded-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($learningDevelopments as $data)
                            <tr>
                                <td>
                                    <a class="small fw-bold" href="#">{{ $data->lnd_title }}</a>
                                </td>
                                <td>
                                    <a class="small fw-bold" href="#">{{ $data->lnd_start }}</a>
                                </td>
                                <td>
                                    <a class="small fw-bold" href="#">{{ $data->lnd_end }}</a>
                                </td>
                                <td>
                                    <a class="small fw-bold" href="#">{{ $data->lnd_numHours }}</a>
                                </td>
                                <td>
                                    <a class="small fw-bold" href="#">{{ $data->lnd_typeId }}</a>
                                </td>
                                <td>
                                    <a class="small fw-bold" href="#">{{ $data->lnd_sponsor }}</a>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <button
                                            class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="bi bi-three-dots-vertical"></span>
                                            <span class="visually-hidden">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu py-2">
                                            <button type="button" class="dropdown-item fw-bold"
                                                wire:click="showLearningDevelopment({{ $data }})"><span
                                                    class="bi bi-pencil-fill text-success me-2"></span>Edit</button>
                                            <button type="button"
                                                class="dropdown-item text-danger rounded-bottom fw-bold"
                                                wire:click="openDeleteModal({{ $data }})"><span
                                                    class="bi bi-trash-fill text-danger me-2"></span>Remove</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr class="text-center">
                                <td colspan="8">No record.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="mt-3">
                {{ $learningDevelopments->links(data: ['scrollTo' => false]) }}
            </div>
        </div>
        {{-- form modal --}}
        <div class="modal fade" wire:ignore.self id="learningDevelopmentModal" tabindex="-1" role="dialog"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content ">
                    @include('livewire.learning-development-form')
                </div>
            </div>
        </div>
        {{-- delete modal --}}
        <div class="modal fade" data-backdrop="static" data-keyboard="false" id="learningDevelopmentDeleteModal"
            tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog " role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete Confirmation</h5>
                        <span class="pull-right" wire:loading>
                            <img src="{{ asset('img/spinner.gif') }}">
                        </span>
                    </div>
                    <div class="modal-body">
                        <p>Delete Educational Background Information?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="close-button" data-bs-dismiss="modal" class="btn btn-white shadow"><i
                                class="fas fa-window-close"></i> Close </button>
                        <button type="button" id="destroy-learning" wire:click="deleteLearningDevelopment"
                            class="btn btn-danger"><i class="far fa-trash-alt"></i>
                            Delete </button>
                    </div>
                </div>
            </div>
        </div>
        @push('scripts')
            <script>
                window.addEventListener('open-learning-form-modal', event => {
                    $('#learningDevelopmentModal').modal('show');
                });

                window.addEventListener('close-learning-form-modal', event => {
                    $('#learningDevelopmentModal').modal('hide');
                });

                window.addEventListener('open-learning-delete-modal', event => {
                    $('#learningDevelopmentDeleteModal').modal('show');
                });

                window.addEventListener('close-learning-delete-modal', event => {
                    $('#learningDevelopmentDeleteModal').modal('hide');
                });
                window.addEventListener('alert', event => {
                    toast.fire({
                        icon: event.detail.type,
                        title: event.detail.message ?? '',
                        showCloseButton: true,
                        width: 500,
                        timer: 2000,
                        timerProgressBar: true,
                    });
                });
            </script>
        @endpush
    </div>
</div>
