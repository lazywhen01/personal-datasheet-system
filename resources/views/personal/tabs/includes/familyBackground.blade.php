<div class="row">
    <div class="col-md-3">
        <div class="form-group mb-3">
            <label for="spouse_surname">Spouse Surname
                <x-asterisks />
            </label>
            <input type="text" id="spouse_surname" name="spouse_surname"
                class="form-control @error('spouse_surname') is-invalid @enderror" placeholder="Spouse Surname"
                value="{{ old('spouse_surname', $personal->familyBackground) }}">
            @error('spouse_surname')
                <x-input-error message="{{ $message }}" />
            @enderror
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group mb-3">
            <label for="spouse_firstname">First Name
                <x-asterisks />
            </label>
            <input type="text" id="spouse_firstname" name="spouse_firstname"
                class="form-control @error('spouse_firstname') is-invalid @enderror" placeholder="First Name"
                value="{{ old('spouse_firstname', $personal->familyBackground) }}">
            @error('spouse_firstname')
                <x-input-error message="{{ $message }}" />
            @enderror
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group mb-3">
            <label for="spouse_middlename">Middle Name
                <x-asterisks />
            </label>
            <input type="text" id="spouse_middlename" name="spouse_middlename"
                class="form-control @error('spouse_middlename') is-invalid @enderror" placeholder="Middle Name"
                value="{{ old('spouse_middlename', $personal->familyBackground) }}">
            @error('spouse_middlename')
                <x-input-error message="{{ $message }}" />
            @enderror
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group mb-3">
            <label for="spouse_suffix">Suffix
                <x-asterisks />
            </label>
            <select type="text" id="spouse_suffix" name="spouse_suffix"
                class="form-select @error('spouse_suffix') is-invalid @enderror" value="{{ old('spouse_suffix') }}">
                <option>Choose an option</option>
                <option value="Sr" {{ $personal->familyBackground->spouse_suffix == 'Sr' ? 'selected' : '' }}>Sr
                </option>
                <option value="Jr" {{ $personal->familyBackground->spouse_suffix == 'Jr' ? 'selected' : '' }}>Jr
                </option>
                <option value="III" {{ $personal->familyBackground->spouse_suffix == 'III' ? 'selected' : '' }}>III
                </option>
                <option value="IV" {{ $personal->familyBackground->spouse_suffix == 'IV' ? 'selected' : '' }}>IV
                </option>
            </select>
            @error('spouse_suffix')
                <x-input-error message="{{ $message }}" />
            @enderror
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-3">
        <div class="form-group mb-3">
            <label for="spouse_occupation">Occupation
                <x-asterisks />
            </label>
            <input type="text" id="spouse_occupation" name="spouse_occupation"
                class="form-control @error('spouse_occupation') is-invalid @enderror" placeholder="Occupation"
                value="{{ old('spouse_occupation', $personal->familyBackground) }}">
            @error('spouse_occupation')
                <x-input-error message="{{ $message }}" />
            @enderror
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group mb-3">
            <label for="spouse_employer">Employer/Business Name
            </label>
            <input type="text" id="spouse_employer" name="spouse_employer"
                class="form-control @error('spouse_employer') is-invalid @enderror"
                placeholder="Employer / Business Name"
                value="{{ old('spouse_employer', $personal->familyBackground) }}">
            @error('spouse_employer')
                <x-input-error message="{{ $message }}" />
            @enderror
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group mb-3">
            <label for="spouse_businessadd">Business Address
            </label>
            <input type="text" id="spouse_businessadd" name="spouse_businessadd"
                class="form-control @error('spouse_businessadd') is-invalid @enderror" placeholder="Business Address"
                value="{{ old('spouse_businessadd', $personal->familyBackground) }}">
            @error('spouse_businessadd')
                <x-input-error message="{{ $message }}" />
            @enderror
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group mb-3">
            <label for="spouse_phone">Phone No.
                <x-asterisks />
            </label>
            <input type="text" id="spouse_phone" name="spouse_phone" maxlength="11"
                class="form-control @error('spouse_phone') is-invalid @enderror" placeholder="Phone Number"
                value="{{ old('spouse_phone', $personal->familyBackground) }}">
            @error('spouse_phone')
                <x-input-error message="{{ $message }}" />
            @enderror
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="form-group mb-3">
            <label for="fathers_surname">Father's Surname
                <x-asterisks />
            </label>
            <input type="text" id="fathers_surname" name="fathers_surname"
                class="form-control @error('fathers_surname') is-invalid @enderror" placeholder="Father's Surname"
                value="{{ old('fathers_surname', $personal->familyBackground) }}">
            @error('fathers_surname')
                <x-input-error message="{{ $message }}" />
            @enderror
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group mb-3">
            <label for="fathers_firstname">First Name
                <x-asterisks />
            </label>
            <input class="form-control" id="fathers_firstname" name="fathers_firstname" type="text"
                @error('fathers_firstname') is-invalid @enderror placeholder="First Name"
                value="{{ old('fathers_firstname', $personal->familyBackground) }}">
            @error('fathers_firstname')
                <x-input-error message="{{ $message }}" />
            @enderror
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group mb-3">
            <label for="fathers_middlename">Middle Name
                <x-asterisks />
            </label>
            <input class="form-control" id="fathers_middlename" name="fathers_middlename" type="text"
                @error('fathers_middlename') is-invalid @enderror placeholder="Middle Name"
                value="{{ old('fathers_middlename', $personal->familyBackground) }}">
            @error('fathers_middlename')
                <x-input-error message="{{ $message }}" />
            @enderror
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group mb-3">
            <label for="fathers_suffix">Suffix
                <x-asterisks />
            </label>
            <select type="text" id="fathers_suffix" name="fathers_suffix"
                class="form-select @error('fathers_suffix') is-invalid @enderror">
                <option>Choose an option</option>
                <option value="Sr"{{ $personal->familyBackground->fathers_suffix == 'Sr' ? 'selected' : '' }}>Sr
                </option>
                <option value="Jr"{{ $personal->familyBackground->fathers_suffix == 'Jr' ? 'selected' : '' }}>Jr
                </option>
                <option value="III"{{ $personal->familyBackground->fathers_suffix == 'III' ? 'selected' : '' }}>III
                </option>
                <option value="IV"{{ $personal->familyBackground->fathers_suffix == 'IV' ? 'selected' : '' }}>IV
                </option>
            </select>
            @error('fathers_suffix')
                <x-input-error message="{{ $message }}" />
            @enderror
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="form-group mb-3">
            <label for="mothers_surname">Mother's Surname
                <x-asterisks />
            </label>
            <input type="text" id="mothers_surname" name="mothers_surname"
                class="form-control @error('mothers_surname') is-invalid @enderror" placeholder="Mother's Surname"
                value="{{ old('mothers_surname', $personal->familyBackground) }}">
            @error('mothers_surname')
                <x-input-error message="{{ $message }}" />
            @enderror
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group mb-3">
            <label for="mothers_firstname">First Name
                <x-asterisks />
            </label>
            <input type="text" id="mothers_firstname" name="mothers_firstname"
                class="form-control @error('mothers_firstname') is-invalid @enderror" placeholder="First Name"
                value="{{ old('mothers_firstname', $personal->familyBackground) }}">
            @error('mothers_firstname')
                <x-input-error message="{{ $message }}" />
            @enderror
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group mb-3">
            <label for="mothers_middlename">Middle Name
                <x-asterisks />
            </label>
            <input type="text" id="mothers_middlename" name="mothers_middlename"
                class="form-control @error('mothers_middlename') is-invalid @enderror" placeholder="Middle Name"
                value="{{ old('mothers_middlename', $personal->familyBackground) }}">
            @error('mothers_middlename')
                <x-input-error message="{{ $message }}" />
            @enderror
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group mb-3">
            <label for="mothers_suffix">Suffix
                <x-asterisks />
            </label>
            <select type="text" id="mothers_suffix" name="mothers_suffix"
                class="form-select @error('mothers_suffix') is-invalid @enderror">
                <option>Choose an option</option>
                <option value="Sr"{{ $personal->familyBackground->mothers_suffix == 'Sr' ? 'selected' : '' }}>Sr
                </option>
                <option value="Jr"{{ $personal->familyBackground->mothers_suffix == 'Jr' ? 'selected' : '' }}>Jr
                </option>
                <option value="III"{{ $personal->familyBackground->mothers_suffix == 'III' ? 'selected' : '' }}>III
                </option>
                <option value="IV"{{ $personal->familyBackground->mothers_suffix == 'IV' ? 'selected' : '' }}>IV
                </option>
            </select>
            @error('mothers_suffix')
                <x-input-error message="{{ $message }}" />
            @enderror
        </div>
    </div>
</div>
<div class="mt-3 text-end">
    <button class="btn btn-gray-800 mt-2 animate-up-2" type="submit"><i
            class="me-2 bi bi-save"></i> Update</button>
    <a href="{{ route('users.index') }}" class="btn btn-danger mt-2 animate-up-2"><i
            class="me-2 bi bi-back"></i> Back</a>
</div>

