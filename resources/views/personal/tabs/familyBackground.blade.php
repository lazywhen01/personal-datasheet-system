<div class="tab-pane fade" id="tabs-family-background" role="tabpanel" aria-labelledby="tabs-waybill-particulars-tab">
    <div class="row">
        <div class="col-12 col-xl-12">
            <div class="card card-body shadow">
                <h2 class="h5 mb-4">Family Background</h2>
                <form method="POST" action="{{ route('familybackground', $personal->familyBackground->id) }}">
                    @csrf
                    @method('PATCH')
                    @include('personal.tabs.includes.familyBackground')
                </form>
            </div>
        </div>
    </div>
    {{-- Child --}}
    <livewire:child-list :personalInformationId="$personal->id" />
</div>
