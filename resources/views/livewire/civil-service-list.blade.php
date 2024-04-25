<div class="row">
    <div class="col-12 col-xl-12">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h3 class="fs-5 fw-bold mb-0">Civil Service Eligibility</h3>
            <button type="button" class="btn btn-sm btn-primary" wire:click="openForm"><i class="far fa-plus"></i> Add
                Civil Service</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-centered table-nowrap rounded">
                    <thead class="thead-light">
                        <tr>
                            <th class="border-0 rounded-start">Career Service</th>
                            <th class="border-0">Rating</th>
                            <th class="border-0">Date of Examination</th>
                            <th class="border-0">Place of Examination</th>
                            <th class="border-0">License Number</th>
                            <th class="border-0">License Validity Date</th>
                            <th class="border-0 rounded-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($civilServices as $data)
                            <tr>
                                <td>
                                    <a class="small fw-bold" href="#">{{ $data->career_service }}</a>
                                </td>
                                <td>
                                    <a class="small fw-bold" href="#">{{ $data->rating }}</a>
                                </td>
                                <td>
                                    <a class="small fw-bold" href="#">{{ $data->examination_date }}</a>
                                </td>
                                <td>
                                    <a class="small fw-bold" href="#">{{ $data->examination_place }}</a>
                                </td>
                                <td>
                                    <a class="small fw-bold" href="#">{{ $data->license_number }}</a>
                                </td>
                                <td>
                                    <a class="small fw-bold" href="#">{{ $data->license_validity_date }}</a>
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
                                                wire:click="showCivilService({{ $data }})"><span
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
                {{ $civilServices->links(data: ['scrollTo' => false]) }}
            </div>
        </div>
    </div>


    {{-- form modal --}}
    <div class="modal fade" wire:ignore.self id="civilServiceModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content ">
                @include('livewire.civil-service-form')
            </div>
        </div>
    </div>



    {{-- delete modal --}}
    <div class="modal fade" data-backdrop="static" data-keyboard="false" id="civilServiceDeleteModal" tabindex="-1"
        role="dialog" aria-hidden="true">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete Confirmation</h5>
                    <span class="pull-right" wire:loading>
                        <img src="{{ asset('img/spinner.gif') }}">
                    </span>
                </div>
                <div class="modal-body">
                    <p>Delete civil service eligiblity?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" id="close-button" data-bs-dismiss="modal" class="btn btn-white shadow"><i
                            class="fas fa-window-close"></i> Close </button>
                    <button type="button" id="destroy-eligiblity" wire:click="deleteCivilEligibility"
                        class="btn btn-danger"><i class="far fa-trash-alt"></i>
                        Delete </button>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            window.addEventListener('open-civil-service-form-modal', event => {
                $('#civilServiceModal').modal('show');
            });

            window.addEventListener('close-civil-service-form-modal', event => {
                $('#civilServiceModal').modal('hide');
            });

            window.addEventListener('open-civil-service-delete-modal', event => {
                $('#civilServiceDeleteModal').modal('show');
            });

            window.addEventListener('close-civil-service-delete-modal', event => {
                $('#civilServiceDeleteModal').modal('hide');
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
