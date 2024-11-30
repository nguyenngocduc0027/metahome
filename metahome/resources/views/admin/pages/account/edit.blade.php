@extends('admin.index')
@section('body')
    <div class="container">
        <div class="page-inner">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
                <div>
                    <h3 class="fw-bold mb-3">Edit Account</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4>Avatar Image</h4>
                            <input type="file" name="before_crop_image" id="before_crop_image" accept="image/*">
                            <input type="hidden" name="base64_image" id="base64-image" accept="image/*">
                            <div class="image_preview">
                                @if (empty($user->avatar))
                                    <img id="img_review" src="/images/avatar/avatar.png" alt="..."
                                        class="avatar-img rounded-circle">
                                @else
                                    <img id="img_review" src="/images/avatar/{{ $user->avatar }}" alt="..."
                                        class="avatar-img rounded-circle">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h4>Information</h4>
                            <form action="{{url('/update-account-' . $user->id)}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4 col-lg-4">
                                        <div class="form-group form-group-default">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                value="{{ $user->name }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-4">
                                        <div class="form-group form-group-default">
                                            <label for="phone">Phone</label>
                                            <input type="text" class="form-control" id="phone" name="phone"
                                                value="{{ $user->phone }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-4">
                                        <div class="form-group form-group-default">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control" id="email" name="email"
                                                value="{{ $user->email }}" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-4">
                                        <div class="form-group form-group-default">
                                            <label for="cccd">CCCD</label>
                                            <input type="text" class="form-control" id="cccd" name="cccd"
                                                value="{{ $user->cccd }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-4">
                                        <div class="form-group form-group-default">
                                            <label for="dob">Date of Birth</label>
                                            <input type="date" class="form-control" id="dob" name="dob"
                                                value="{{ $user->dob }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-4">
                                        <div class="form-group form-group-default">
                                            <label for="gender">Gender</label>
                                            <select class="form-select" id="selectGender" name="gender">
                                                <option value="Male" @selected($user->gender == 'Male')>Male</option>
                                                <option value="Female" @selected($user->gender == 'Female')>Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-4">
                                        <div class="form-group form-group-default">
                                            <label for="gender">Role</label>
                                            <select class="form-select" id="selectRole" name="role">
                                                <option value="User" @selected($user->role == 'User')>User</option>
                                                <option value="Manager" @selected($user->role == 'Manager')>Manager</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-4">
                                        <div class="form-group form-group-default">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" id="password" name="password"
                                                value="{{ $user->password }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-4">
                                        <div class="form-group form-group-default">
                                            <label for="address">Address</label>
                                            <input type="text" class="form-control" id="address" name="address"
                                                value="{{ $user->address }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-demo-grid">
                                    <div class="col-md-4 ms-auto">
                                        <div style="text-align: right">
                                            <button type="submit" class="btn btn-success">Update</button>
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
    <!-- Modal -->
    <div id="imageModel" class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crop and Resize Avatar</h5>
                </div>
                <div class="modal-body">
                    <div id="image_demo" style="margin-top:30px"></div>
                    <input type="hidden" name="user" value="{{$user->id}}">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary crop_image">Crop</button>
                </div>
            </div>
        </div>
    </div>
@endsection
