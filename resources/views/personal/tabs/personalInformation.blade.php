<div class="tab-pane fade" id="tabs-personal-information" role="tabpanel" aria-labelledby="tabs-waybill-information-tab">
    <div class="row">
        <div class="col-12 col-xl-12">
            <div class="card card-body shadow">
                <h2 class="h5 mb-4">Personal information</h2>
                <form method="POST" action="{{ route('personal.update', $personal) }}">
                    @csrf
                    @method('PUT')
                    {{-- Personal --}}
                    @include('personal.tabs.includes.personalInformation')
                    {{-- Residential --}}
                    @include('personal.tabs.includes.partials.personal-residential')
                    {{-- Button --}}
                    @include('personal.components.save-button')
                </form>
            </div>
        </div>
    </div>
</div>
