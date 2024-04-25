<x-app-layout>
    {{-- <div class="nav-wrapper position-relative">
        <ul class="nav nav-tabs" id="v-pills-tab" role="tablist">
            <li class="nav-item active mb-2 shadow-sm">
                <a class="nav-link mb-sm-3 mb-md-0" id="tabs-waybill-information-tab" data-bs-toggle="tab"
                    href="#tabs-personal-information" role="tab" aria-controls="tabs-waybill-information"
                    aria-selected="true">Personal Information</a>
            </li>
        </ul>
    </div> --}}

    {{-- <div class="col-md-9">
        <div class="card border-0 mb-4 rounded">
            <div class="card-body p-0 card-body-bg-color-override">
                <div class="tab-content" id="tabcontent1">
                    <div class="tab-pane fade" id="tabs-personal-information" role="tabpanel"
                        aria-labelledby="tabs-waybill-information-tab">
                        <div class="row"> --}}
    <div class="col-12 col-xl-10">
        <div class="card card-body border-2 shadow mb-4">
            <h2 class="h5 mb-4">Personal information</h2>
            <form method="POST" action="{{ route('personal.store') }}">
                @csrf
                @method('POST')

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group mb-3">
                            <label for="first_name">First Name
                                <x-asterisks />
                            </label>
                            <input type="text" id="first_name" name="first_name"
                                class="form-control @error('first_name') is-invalid @enderror" placeholder="First Name"
                                value="{{ old('first_name') }}">
                            @error('first_name')
                                <x-input-error message="{{ $message }}" />
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group mb-3">
                            <label for="middle_name">Middle Name</label>
                            <input type="text" id="middle_name" name="middle_name"
                                class="form-control @error('middle_name') is-invalid @enderror"
                                placeholder="Middle Name" value="{{ old('middle_name') }}">
                            @error('middle_name')
                                <x-input-error message="{{ $message }}" />
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group mb-3">
                            <label for="last_name">Last Name
                                <x-asterisks />
                            </label>
                            <input type="text" id="last_name" name="last_name"
                                class="form-control @error('last_name') is-invalid @enderror" placeholder="Last Name"
                                value="{{ old('last_name') }}">
                            @error('last_name')
                                <x-input-error message="{{ $message }}" />
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group mb-3">
                            <label for="suffix">Suffix
                                <x-asterisks />
                            </label>
                            <select type="text" id="suffix" name="suffix"
                                class="form-select @error('suffix') is-invalid @enderror" value="{{ old('suffix') }}">
                                <option>Choose an option</option>
                                <option value="Sr">Sr</option>
                                <option value="Jr">Jr</option>
                                <option value="III">III</option>
                                <option value="IV">IV</option>
                            </select>
                            @error('suffix')
                                <x-input-error message="{{ $message }}" />
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group mb-4">
                            <label for="date_birth">Date of Birth
                                <x-asterisks />
                            </label>
                            <input type="date" id="date_birth" name="date_birth"
                                class="form-control @error('date_birth') is-invalid @enderror"
                                placeholder="Date of Birth" value="{{ old('date_birth') }}">
                            @error('date_birth')
                                <x-input-error message="{{ $message }}" />
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-">
                            <label for="place_birth">Place of Birth
                                <x-asterisks />
                            </label>
                            <input type="" id="place_birth" name="place_birth"
                                class="form-control @error('place_birth') is-invalid @enderror"
                                placeholder="Municipality / Province" value="{{ old('place_birth') }}">
                            @error('place_birth')
                                <x-input-error message="{{ $message }}" />
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group mb-4">
                            <label for="sex">Sex
                                <x-asterisks />
                            </label>
                            <select type="button" id="sex" name="sex"
                                class="form-select @error('sex') is-invalid @enderror" placeholder="Sex"
                                value="{{ old('sex') }}">
                                <option>Choose an option</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            @error('sex')
                                <x-input-error message="{{ $message }}" />
                            @enderror
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group mb-4">
                            <label for="civil_status">Civil Status
                                <x-asterisks />
                            </label>
                            <select type="button" id="civil_status" name="civil_status"
                                class="form-select @error('civil_status') is-invalid @enderror"
                                placeholder="Civil Status" value="{{ old('civil_status') }}">
                                <option>Choose an option</option>
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Widowed">Widowed</option>
                            </select>
                            @error('civil_status')
                                <x-input-error message="{{ $message }}" />
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group mb-3">
                            <label for="height">Height (cm)
                                <x-asterisks />
                            </label>
                            <input type="number" id="height" name="height"
                                class="form-control @error('height') is-invalid @enderror" placeholder="Height (cm)"
                                value="{{ old('height') }}">
                            @error('height')
                                <x-input-error message="{{ $message }}" />
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group mb-3">
                            <label for="weight">Weight (kg)
                                <x-asterisks />
                            </label>
                            <input type="number" id="weight" name="weight"
                                class="form-control @error('weight') is-invalid @enderror" placeholder="Weight (kg)"
                                value="{{ old('weight') }}">
                            @error('weight')
                                <x-input-error message="{{ $message }}" />
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group mb-3">
                            <label for="blood_type">Blood Type
                                <x-asterisks />
                            </label>
                            <select type="button" id="blood_type" name="blood_type"
                                class="form-select @error('blood_type') is-invalid @enderror"
                                value="{{ old('blood_type') }}">
                                <option>Choose an option</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB- </option>
                            </select>
                            @error('blood_type')
                                <x-input-error message="{{ $message }}" />
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group mb-4">
                            <label for="gsis_id">GSIS ID No.
                                <x-asterisks />
                            </label>
                            <input type="text" id="gsis_id" name="gsis_id"
                                class="form-control @error('gsis_id') is-invalid @enderror"
                                placeholder="00-0000000-0" oninput="formatGsis(this)" maxlength="11"
                                value="{{ old('gsis_id') }}">
                            @error('gsis_id')
                                <x-input-error message="{{ $message }}" />
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group mb-4">
                            <label for="pagibig_id">PAG-IBIG ID No.
                                <x-asterisks />
                            </label>
                            <input type="text" id="pagibig_id" name="pagibig_id"
                                class="form-control @error('pagibig_id') is-invalid @enderror"
                                placeholder="0000-0000-0000" oninput="formatPagibig(this)"
                                value="{{ old('pagibig_id') }}">
                            @error('pagibig_id')
                                <x-input-error message="{{ $message }}" />
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group mb-4">
                            <label for="philhealth_id">PhilHealth No.
                                <x-asterisks />
                            </label>
                            <input type="text" id="philhealth_id" name="philhealth_id"
                                class="form-control @error('philhealth_id') is-invalid @enderror"
                                placeholder="00-000000000-0" oninput="formatPhilHealth(this)"
                                value="{{ old('philhealth_id') }}">
                            @error('philhealth_id')
                                <x-input-error message="{{ $message }}" />
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group mb-4">
                            <label for="sss_id">SSS No.
                                <x-asterisks />
                            </label>
                            <input type="text" id="sss_id" name="sss_id"
                                class="form-control @error('sss_id') is-invalid @enderror" placeholder="00-0000000-0"
                                oninput="formatSSS(this)" value="{{ old('sss_id') }}">
                            @error('sss_id')
                                <x-input-error message="{{ $message }}" />
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group mb-4">
                            <label for="tin_id">TIN No.
                                <x-asterisks />
                            </label>
                            <input type="text" id="tin_id" name="tin_id"
                                class="form-control @error('tin_id') is-invalid @enderror"
                                placeholder="000-000-000-000" oninput="formatTIN(this)" value="{{ old('tin_id') }}">
                            @error('tin_id')
                                <x-input-error message="{{ $message }}" />
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group mb-4">
                            <label for="agency_id">Agency Employee No.
                                <x-asterisks />
                            </label>
                            <input type="text" id="agency_id" name="agency_id"
                                class="form-control @error('agency_id') is-invalid @enderror" placeholder="0000000"
                                maxlength="7" value="{{ old('agency_id') }}">
                            @error('agency_id')
                                <x-input-error message="{{ $message }}" />
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group mb-4">
                            <label for="citizenship">Citizenship
                                <x-asterisks /></label>
                            <select type="button" id="citizenship" name="citizenship"
                                class="form-select @error('citizenship') is-invalid @enderror"
                                placeholder="Date of Birth" value="{{ old('citizenship') }}">
                                <option>Choose an option</option>
                                <option value="Filipino">Filipino</option>
                                <option value="Dual">Dual Citizenship</option>
                            </select>
                            @error('citizenship')
                                <x-input-error message="{{ $message }}" />
                            @enderror
                        </div>
                    </div>

                    <!-- Additional dropdown for method of acquiring dual citizenship -->
                    <div class="col-md-3" id="dualCitizenshipMethod" style="display: none;">
                        <div class="form-group mb-4">
                            <label for="dualCitizenshipMethod">Acquired By:</label>
                            <select id="dualCitizenshipMethod" name="dualCitizenshipMethod"
                                class="form-select @error('dualCitizenshipMethod') is-invalid @enderror">
                                <option>Choose an option</option>
                                <option value="byBirth">By Birth</option>
                                <option value="byCitizenship">By Citizenship</option>
                            </select>
                            @error('dualCitizenshipMethod')
                                <x-input-error message="{{ $message }}" />
                            @enderror
                        </div>
                    </div>
                    <!-- Dropdown list for selecting citizenship country -->
                    <div class="col-md-6" id="citizenshipCountryDropdown" style="display: none;">
                        <div class="form-group mb-4">
                            <label for="citizenshipCountry">Citizenship
                                Country:</label>
                            <select id="citizenshipCountry" name="citizenshipCountry"
                                class="form-select @error('citizenshipCountry') is-invalid @enderror">
                                <option>Choose a country</option>
                                <!-- Countries will be dynamically added here -->
                            </select>
                            @error('citizenshipCountry')
                                <x-input-error message="{{ $message }}" />
                            @enderror
                        </div>
                    </div>
                </div>

                <h5 class="h5 mb-4">Residential Address</h5>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group mb-3">
                            <label for="resi_house">House/Block/Lot No.
                                <x-asterisks />
                            </label>
                            <input type="text" id="resi_house" name="resi_house"
                                class="form-control @error('resi_house') is-invalid @enderror"
                                placeholder="House / Block / Lot No." value="{{ old('resi_house') }}">
                            @error('resi_house')
                                <x-input-error message="{{ $message }}" />
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group mb-3">
                            <label for="resi_street">Street
                                <x-asterisks />
                            </label>
                            <input type="text" id="resi_street" name="resi_street"
                                class="form-control @error('resi_street') is-invalid @enderror" placeholder="Street"
                                value="{{ old('resi_street') }}">
                            @error('resi_street')
                                <x-input-error message="{{ $message }}" />
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group mb-3">
                            <label for="resi_subdivision">Subdivison/Village
                                <x-asterisks />
                            </label>
                            <input type="text" id="resi_subdivision" name="resi_subdivision"
                                class="form-control @error('resi_subdivision') is-invalid @enderror"
                                placeholder="Subdivison / Village" value="{{ old('resi_subdivision') }}">
                            @error('resi_subdivision')
                                <x-input-error message="{{ $message }}" />
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group mb-3">
                            <label for="resi_barangay">Barangay
                                <x-asterisks />
                            </label>
                            <input type="text" id="resi_barangay" name="resi_barangay"
                                class="form-control @error('resi_barangay') is-invalid @enderror"
                                placeholder="Barangay" value="{{ old('resi_barangay') }}">
                            @error('resi_barangay')
                                <x-input-error message="{{ $message }}" />
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group mb-3">
                            <label for="resi_city">City/Municipality
                                <x-asterisks />
                            </label>
                            <input type="text" id="resi_city" name="resi_city"
                                class="form-control @error('resi_city') is-invalid @enderror"
                                placeholder="City / Municipality" value="{{ old('resi_city') }}">
                            @error('resi_city')
                                <x-input-error message="{{ $message }}" />
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group mb-3">
                            <label for="resi_province">Province
                                <x-asterisks />
                            </label>
                            <input type="text" id="resi_province" name="resi_province"
                                class="form-control @error('resi_province') is-invalid @enderror"
                                placeholder="Province" value="{{ old('resi_province') }}">
                            @error('resi_province')
                                <x-input-error message="{{ $message }}" />
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group mb-3">
                            <label for="resi_zip">Zip Code
                                <x-asterisks />
                            </label>
                            <input type="text" id="resi_zip" name="resi_zip"
                                class="form-control @error('resi_zip') is-invalid @enderror" placeholder="Zip Code"
                                value="{{ old('resi_zip') }}">
                            @error('resi_zip')
                                <x-input-error message="{{ $message }}" />
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <h5 class="h5 mb-4">Permanent Address</h5>
                    <div class="col-md-4">
                        <div class="form-group mb-3">
                            <label for="perma_house">House/Block/Lot No.
                                <x-asterisks />
                            </label>
                            <input type="text" id="perma_house" name="perma_house"
                                class="form-control @error('perma_house') is-invalid @enderror"
                                placeholder="House / Block / Lot No." value="{{ old('perma_house') }}">
                            @error('perma_house')
                                <x-input-error message="{{ $message }}" />
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group mb-3">
                            <label for="perma_street">Street
                                <x-asterisks />
                            </label>
                            <input type="text" id="perma_street" name="perma_street"
                                class="form-control @error('perma_street') is-invalid @enderror" placeholder="Street"
                                value="{{ old('perma_street') }}">
                            @error('perma_street')
                                <x-input-error message="{{ $message }}" />
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group mb-3">
                            <label for="perma_subdivision">Subdivison/Village
                                <x-asterisks />
                            </label>
                            <input type="text" id="perma_subdivision" name="perma_subdivision"
                                class="form-control @error('perma_subdivision') is-invalid @enderror"
                                placeholder="Subdivison / Village" value="{{ old('perma_subdivision') }}">
                            @error('perma_subdivision')
                                <x-input-error message="{{ $message }}" />
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group mb-3">
                            <label for="perma_barangay">Barangay
                                <x-asterisks />
                            </label>
                            <input type="text" id="perma_barangay" name="perma_barangay"
                                class="form-control @error('perma_barangay') is-invalid @enderror"
                                placeholder="Barangay" value="{{ old('perma_barangay') }}">
                            @error('perma_barangay')
                                <x-input-error message="{{ $message }}" />
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group mb-3">
                            <label for="perma_city">City/Municipality
                                <x-asterisks />
                            </label>
                            <input type="text" id="perma_city" name="perma_city"
                                class="form-control @error('perma_city') is-invalid @enderror"
                                placeholder="City / Municipality" value="{{ old('perma_city') }}">
                            @error('perma_city')
                                <x-input-error message="{{ $message }}" />
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group mb-3">
                            <label for="perma_province">Province
                                <x-asterisks />
                            </label>
                            <input type="text" id="perma_province" name="perma_province"
                                class="form-control @error('perma_province') is-invalid @enderror"
                                placeholder="Province" value="{{ old('perma_province') }}">
                            @error('perma_province')
                                <x-input-error message="{{ $message }}" />
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group mb-3">
                            <label for="perma_zip">Zip Code
                                <x-asterisks />
                            </label>
                            <input type="text" id="perma_zip" name="perma_zip"
                                class="form-control @error('perma_zip') is-invalid @enderror" placeholder="Zip Code"
                                value="{{ old('perma_zip') }}">
                            @error('perma_zip')
                                <x-input-error message="{{ $message }}" />
                            @enderror
                        </div>
                    </div>
                </div>

                <!--Save Button-->
                <div class="mt-3 text-end">
                    <button class="btn btn-gray-800 mt-2 animate-up-2" type="submit"><i class="me-2 bi bi-save"></i>
                        Save</button>
                    <a href="{{ route('personal.index') }}" class="btn btn-danger mt-2 animate-up-2"><i
                            class="me-2 bi bi-back"></i> Back</a>
                </div>
            </form>
        </div>
    </div>
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
