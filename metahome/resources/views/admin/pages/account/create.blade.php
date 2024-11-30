@extends('admin.index')
@section('body')
    <div class="container">
        <div class="page-inner">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
                <div>
                    <h3 class="fw-bold mb-3">Create Account</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('add-account') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4 col-lg-4">
                                        <div class="form-group form-group-default">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" id="name"
                                                value="{{ old('name') }}" name="name">
                                            @error('name')
                                                <small class="form-text text-muted text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="col-md-4 col-lg-4">
                                        <div class="form-group form-group-default">
                                            <label for="phone">Phone</label>
                                            <input type="text" class="form-control" id="phone"
                                                value="{{ old('phone') }}" name="phone">
                                            @error('phone')
                                                <small class="form-text text-muted text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="col-md-4 col-lg-4">
                                        <div class="form-group form-group-default">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control" id="email"
                                                value="{{ old('email') }}" name="email">
                                            @error('email')
                                                <small class="form-text text-muted text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="col-md-4 col-lg-4">
                                        <div class="form-group form-group-default">
                                            <label for="cccd">CCCD</label>
                                            <input type="text" class="form-control" id="cccd"
                                                value="{{ old('cccd') }}" name="cccd">
                                            @error('cccd')
                                                <small class="form-text text-muted text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="col-md-4 col-lg-4">
                                        <div class="form-group form-group-default">
                                            <label for="dob">Date of Birth</label>
                                            <input type="date" class="form-control" id="dob"
                                                value="{{ old('dob') }}" name="dob">
                                            @error('dob')
                                                <small class="form-text text-muted text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="col-md-2 col-lg-2">
                                        <div class="form-group form-group-default">
                                            <label for="gender">Gender</label>
                                            <select class="form-select" id="selectGender" name="gender">
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-lg-2">
                                        <div class="form-group form-group-default">
                                            <label for="gender">Role</label>
                                            <select class="form-select" id="selectRole" name="role">
                                                <option>User</option>
                                                <option>Manager</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-4">
                                        <div class="form-group form-group-default">
                                            <label for="password">Password</label>
                                            <input type="text" class="form-control" id="password" value=""
                                                name="password">
                                            @error('password')
                                                <small class="form-text text-muted text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="col-md-8 col-lg-8">
                                        <div class="form-group form-group-default">
                                            <label for="address">Address</label>
                                            <input type="text" class="form-control" id="address"
                                                value="{{ old('address') }}" name="address">
                                            @error('address')
                                                <small class="form-text text-muted text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                    </div>
                                </div>
                                <div class="row row-demo-grid">
                                    <div class="col-md-4 ms-auto">
                                        <div style="text-align: right">
                                            <button type="submit" class="btn btn-success">Create</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
