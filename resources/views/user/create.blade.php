<x-app-layout>

    <x-heading>
        <x-slot:title>
            Add User
        </x-slot:title>
    </x-heading>

    <div class="row mb-4">
        <div class="col-12 col-xl-10">

            <div class="card card-body border-0 shadow mb-4">
                <h2 class="h5 mb-4">User information</h2>

                <form method="POST" action="{{ route('users.store') }}">
                    @csrf

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="first_name">First Name
                                    <x-asterisks />
                                </label>
                                <input type="text" id="first_name" name="first_name"
                                    class="form-control @error('first_name') is-invalid @enderror"
                                    placeholder="First Name" value="{{ old('first_name') }}" >
                                @error('first_name')
                                    <x-input-error message="{{ $message }}" />
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
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
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="last_name">Last Name
                                    <x-asterisks />
                                </label>
                                <input type="text" id="last_name" name="last_name"
                                    class="form-control @error('last_name') is-invalid @enderror"
                                    placeholder="Last Name" value="{{ old('last_name') }}">
                                @error('last_name')
                                    <x-input-error message="{{ $message }}" />
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="email">Email
                                    <x-asterisks />
                                </label>
                                <input type="email" id="email" name="email"
                                    class="form-control @error('email') is-invalid @enderror" placeholder="Email"
                                    value="{{ old('email') }}">
                                @error('email')
                                    <x-input-error message="{{ $message }}" />
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="role">Role
                                    <x-asterisks />
                                </label>
                                <select class="form-select" aria-label="Default select example" id="role" name="role" class="form-control @error('role') is-invalid @enderror">
                                    <option selected>Select option</option>
                                    <option value="Admin" {{ old('role') == 'Admin' ? 'selected' : '' }}>Admin</option>
                                    <option value="Encoder" {{ old('role') == 'Encoder' ? 'selected' : '' }}>Encoder
                                    </option>
                                </select>
                                @error('role')
                                    <x-input-error message="{{ $message }}" />
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="status">Status
                                    <x-asterisks />
                                </label>
                                <select class="form-select" aria-label="Default select example" id="status" name="status" type="password" placeholder="Status">
                                    <option selected>Select option</option>
                                    <option value="Active">Active</option>
                                    <option value="Inactive">Inactive</option>
                                </select>
                                @error('status')
                                    <x-input-error message="{{ $message }}" />
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="password">Password
                                    <x-asterisks />
                                </label>
                                <input type="password" id="password" name="password"
                                    class="form-control @error('password') is-invalid @enderror" placeholder="Password"
                                    >
                                @error('password')
                                    <x-input-error message="{{ $message }}" />
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="password_confirmation">Confirm Password
                                    <x-asterisks />
                                </label>
                                <input class="form-control" id="password_confirmation" name="password_confirmation"
                                    type="password" placeholder="Confirm Password">
                            </div>
                        </div>
                    </div>

                    <div class="mt-3 text-end">
                        <button class="btn btn-gray-800 mt-2 animate-up-2" type="submit"><i
                                class="me-2 bi bi-save"></i> Save</button>
                        <a href="{{ route('users.index') }}" class="btn btn-danger mt-2 animate-up-2"><i
                                class="me-2 bi bi-back"></i> Cancel</a>
                    </div>

                </form>

            </div>

        </div>
    </div>
</x-app-layout>
