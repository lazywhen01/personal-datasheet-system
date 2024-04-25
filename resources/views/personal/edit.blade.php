<x-app-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="nav-wrapper position-relative mb-2">
                    <ul class="nav flex-column nav-tabs me-3" id="v-pills-tab" role="tablist">
                        <li class="nav-item active mb-2 shadow-sm">
                            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-waybill-information-tab" data-bs-toggle="tab"
                                href="#tabs-personal-information" role="tab"
                                aria-controls="tabs-waybill-information" aria-selected="true"><i
                                    class="bi bi-person-fill"></i> Personal Information</a>
                        </li>
                        <li class="nav-item active mb-2 shadow-sm">
                            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-waybill-particulars-tab" data-bs-toggle="tab"
                                href="#tabs-family-background" role="tab" aria-controls="tabs-waybill-particulars"
                                aria-selected="false"><i class="bi bi-people-fill"></i> Family Background</a>
                        </li>
                        <li class="nav-item active mb-2 shadow-sm">
                            <a class="nav-link mb-sm-3 mb-md-0" data-bs-toggle="tab" href="#education-background"
                                role="tab" aria-controls="tabs-waybill-containers" aria-selected="false"><i
                                    class="bi bi-book-half"></i> Educational Background</a>
                        </li>
                        <li class="nav-item mb-2 shadow-sm">
                            <a class="nav-link mb-sm-3 mb-md-0" data-bs-toggle="tab" href="#civil-service-eligibility"
                                role="tab" aria-controls="tabs-waybill-charges" aria-selected="false"><i
                                    class="bi bi-archive-fill"></i> Civil Service Eligibility</a>
                        </li>
                        <li class="nav-item mb-2 shadow-sm">
                            <a class="nav-link mb-sm-3 mb-md-0" data-bs-toggle="tab"
                                href="#work-experience" role="tab" aria-controls="work-experience"
                                aria-selected="false"><i class="bi bi-person-vcard-fill"></i> Work Experience</a>
                        </li>
                        <li class="nav-item mb-2 shadow-sm">
                            <a class="nav-link mb-sm-3 mb-md-0" data-bs-toggle="tab"
                                href="#voluntary-work" role="tab" aria-controls="voluntary-work"
                                aria-selected="false"><i class="bi bi-calendar3-range-fill"></i> Voluntary Works</a>
                        </li>
                        <li class="nav-item mb-2 shadow-sm">
                            <a class="nav-link mb-sm-3 mb-md-0" data-bs-toggle="tab"
                                href="#learning-development" role="tab" aria-controls="learning-development"
                                aria-selected="false"><i class="bi bi-bookmark-star-fill"></i> Learning and
                                Development</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-9">
                <div class="card border-0 mb-4 rounded">
                    <div class="card-body p-0 card-body-bg-color-override shadow-lg">
                        <div class="tab-content" id="tabcontent1">

                            {{-- Personal-Information --}}
                            @include('personal.tabs.personalInformation')

                            {{-- Family-Background --}}
                            @include('personal.tabs.familyBackground')

                            {{-- Educational-Background --}}
                            @include('personal.tabs.educationalBackground')

                            {{-- Civil-Service --}}
                            @include('personal.tabs.civilService')

                            {{-- Work-Experience --}}
                            @include('personal.tabs.workExperience')

                            {{-- Voluntary-Work --}}
                            @include('personal.tabs.voluntaryWorks')
                        </div>
                        <div class="tab-content" id="tabcontent2">
                            {{-- Learning-Development --}}
                            @include('personal.tabs.learningDevelopment')

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script type="text/javascript" src="{{ asset('js/form.js') }}"></script>
    @endpush
</x-app-layout>
