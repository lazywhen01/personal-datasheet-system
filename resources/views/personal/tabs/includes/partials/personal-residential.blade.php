<br>
<h5 class="h5 mb-4">Residential Address</h5>
<div class="row">
    <div class="col-md-4">
        <div class="form-group mb-3">
            <label for="resi_house">House/Block/Lot No.
                <x-asterisks />
            </label>
            <input type="text" id="resi_house" name="resi_house"
                class="form-control @error('resi_house') is-invalid @enderror"
                placeholder="House / Block / Lot No." value="{{ old('resi_house', $personal->resi_house) }}">
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
                value="{{ old('resi_street', ) }}">
            @error('resi_street', $personal->resi_street)
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
                placeholder="Subdivison / Village" value="{{ old('resi_subdivision', $personal->resi_subdivision) }}">
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
                placeholder="Barangay" value="{{ old('resi_barangay', $personal->resi_barangay) }}">
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
                placeholder="City / Municipality" value="{{ old('resi_city', $personal->resi_city) }}">
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
                placeholder="Province" value="{{ old('resi_province', $personal->resi_province) }}">
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
            <input type="text" id="resi_zip" name="resi_zip" maxlength="4"
                class="form-control @error('resi_zip') is-invalid @enderror" placeholder="Zip Code"
                value="{{ old('resi_zip', $personal->resi_zip) }}">
            @error('resi_zip')
                <x-input-error message="{{ $message }}" />
            @enderror
        </div>
    </div>
</div>
<br>
<div class="row">
    <h5 class="h5 mb-4">Permanent Address</h5>
    <div class="col-md-4">
        <div class="form-group mb-3">
            <label for="perma_house">House/Block/Lot No.
                <x-asterisks />
            </label>
            <input type="text" id="perma_house" name="perma_house"
                class="form-control @error('perma_house') is-invalid @enderror"
                placeholder="House / Block / Lot No." value="{{ old('perma_house', $personal->perma_house) }}">
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
                value="{{ old('perma_street', $personal->perma_street) }}">
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
                placeholder="Subdivison / Village" value="{{ old('perma_subdivision', $personal->perma_subdivision) }}">
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
                placeholder="Barangay" value="{{ old('perma_barangay', $personal->perma_barangay) }}">
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
                placeholder="City / Municipality" value="{{ old('perma_city', $personal->perma_city) }}">
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
                placeholder="Province" value="{{ old('perma_province', $personal->perma_province) }}">
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
            <input type="text" id="perma_zip" name="perma_zip" maxlength="4"
                class="form-control @error('perma_zip') is-invalid @enderror" placeholder="Zip Code"
                value="{{ old('perma_zip', $personal->perma_zip) }}">
            @error('perma_zip')
                <x-input-error message="{{ $message }}" />
            @enderror
        </div>
    </div>
</div>