<div class="row">
    <div class="col-md-3">
        <div class="form-group mb-3">
            <label for="first_name">First Name
                <x-asterisks />
            </label>
            <input type="text" id="first_name" name="first_name"
                class="form-control @error('first_name') is-invalid @enderror"
                placeholder="First Name"
                value="{{ old('first_name', $personal->first_name) }}">
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
                placeholder="Middle Name"
                value="{{ old('middle_name', $personal->middle_name) }}">
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
                class="form-control @error('last_name') is-invalid @enderror"
                placeholder="Last Name"
                value="{{ old('last_name', $personal->last_name) }}">
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
                class="form-select @error('suffix') is-invalid @enderror">
                <option>Choose an option</option>
                <option value="Sr"
                    {{ $personal->suffix == 'Sr' ? 'selected' : '' }}>Sr
                </option>
                <option value="Jr"
                    {{ $personal->suffix == 'Jr' ? 'selected' : '' }}>Jr
                </option>
                <option value="III"
                    {{ $personal->suffix == 'III' ? 'selected' : '' }}>
                    III</option>
                <option value="IV"
                    {{ $personal->suffix == 'IV' ? 'selected' : '' }}>
                    IV</option>
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
                placeholder="Date of Birth"
                value="{{ old('date_birth', $personal->date_birth) }}">
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
                placeholder="Municipality / Province"
                value="{{ old('place_birth', $personal->place_birth) }}">
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
                class="form-select @error('sex') is-invalid @enderror"
                placeholder="Sex">
                <option>Choose an option</option>
                <option value="Male"
                    {{ $personal->sex == 'Male' ? 'selected' : '' }}>
                    Male</option>
                <option value="Female"
                    {{ $personal->sex == 'Female' ? 'selected' : '' }}>
                    Female</option>
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
            <select type="button" id="civil_status"
                name="civil_status"
                class="form-select @error('civil_status') is-invalid @enderror"
                placeholder="Civil Status">
                <option>Choose an option</option>
                <option value="Single"
                    {{ $personal->civil_status == 'Single' ? 'selected' : '' }}>
                    Single</option>
                <option value="Married"
                    {{ $personal->civil_status == 'Married' ? 'selected' : '' }}>
                    Married</option>
                <option value="Widowed"
                    {{ $personal->civil_status == 'Widowed' ? 'selected' : '' }}>
                    Widowed</option>
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
                class="form-control @error('height') is-invalid @enderror"
                placeholder="Height (cm)"
                value="{{ old('height', $personal->height) }}">
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
                class="form-control @error('weight') is-invalid @enderror"
                placeholder="Weight (kg)"
                value="{{ old('weight', $personal->weight) }}">
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
                <option value="O+"
                    {{ $personal->blood_type == 'O+' ? 'selected' : '' }}>
                    O+</option>
                <option value="O-"
                    {{ $personal->blood_type == 'O-' ? 'selected' : '' }}>
                    O-</option>
                <option value="A+"
                    {{ $personal->blood_type == 'A+' ? 'selected' : '' }}>
                    A+</option>
                <option value="A-"
                    {{ $personal->blood_type == 'A-' ? 'selected' : '' }}>
                    A-</option>
                <option value="B+"
                    {{ $personal->blood_type == 'B+' ? 'selected' : '' }}>
                    B+</option>
                <option value="B-"
                    {{ $personal->blood_type == 'B-' ? 'selected' : '' }}>
                    B-</option>
                <option value="AB+"
                    {{ $personal->blood_type == 'AB+' ? 'selected' : '' }}>
                    AB+</option>
                <option value="AB-"
                    {{ $personal->blood_type == 'AB-' ? 'selected' : '' }}>
                    AB- </option>
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
                placeholder="00-0000000-0" oninput="formatGsis(this)"
                maxlength="11"
                value="{{ old('gsis_id', $personal->gsis_id) }}">
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
                placeholder="0000-0000-0000"
                oninput="formatPagibig(this)"
                value="{{ old('pagibig_id', $personal->pagibig_id) }}">
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
            <input type="text" id="philhealth_id"
                name="philhealth_id"
                class="form-control @error('philhealth_id') is-invalid @enderror"
                placeholder="00-0000000-0" oninput="formatSSS(this)"
                value="{{ old('philhealth_id', $personal->philhealth_id) }}">
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
                class="form-control @error('sss_id') is-invalid @enderror"
                placeholder="00-0000000-0" oninput="formatSSS(this)"
                value="{{ old('sss_id', $personal->sss_id) }}">
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
                placeholder="000-000-000-000"
                oninput="formatTIN(this)"
                value="{{ old('tin_id', $personal->tin_id) }}">
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
            <input type="number" id="agency_id" name="agency_id"
                class="form-control @error('agency_id') is-invalid @enderror"
                placeholder="0000000" maxlength="7"
                value="{{ old('agency_id', $personal->agency_id) }}">
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
            <select type="button" id="citizenship"
                name="citizenship"
                class="form-select @error('citizenship') is-invalid @enderror"
                placeholder="Date of Birth">
                <option>Choose an option</option>
                <option value="Filipino"
                    {{ $personal->citizenship == 'Filipino' ? 'selected' : '' }}>
                    Filipino</option>
                <option value="Dual"
                    {{ $personal->citizenship == 'Dual' ? 'selected' : '' }}>
                    Dual Citizenship</option>
            </select>
            @error('citizenship')
                <x-input-error message="{{ $message }}" />
            @enderror
        </div>
    </div>

    <!-- Additional dropdown for method of acquiring dual citizenship -->
    <div class="col-md-3" id="dualCitizenshipMethod"
        style="display: none;">
        <div class="form-group mb-4">
            <label for="dualCitizenshipMethod">Acquired By:</label>
            <select id="dualCitizenshipMethod"
                name="dualCitizenshipMethod"
                class="form-select @error('dualCitizenshipMethod') is-invalid @enderror">
                <option>Choose an option</option>
                <option value="byBirth"
                    {{ $personal->dualCitizenshipMethod == 'byBirth' ? 'selected' : '' }}>
                    By Birth</option>
                <option value="byCitizenship"
                    {{ $personal->dualCitizenshipMethod == 'byCitizenship' ? 'selected' : '' }}>
                    By Citizenship</option>
            </select>
            @error('dualCitizenshipMethod')
                <x-input-error message="{{ $message }}" />
            @enderror
        </div>
    </div>
    <!-- Dropdown list for selecting citizenship country -->
    <div class="col-md-6" id="citizenshipCountryDropdown"
        style="display: none;">
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

@push('scripts')
<script type="text/javascript" src="{{ asset('js/form.js') }}"></script>
@endpush