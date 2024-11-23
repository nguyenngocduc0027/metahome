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
                                @if (empty($avatar->title))
                                    <img id="img_review" src="/images/avatar/avatar.png" alt="..."
                                        class="avatar-img rounded-circle">
                                @else
                                    <img id="img_review" src="/images/avatar/{{ $avatar->title }}" alt="..."
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
                            <div class="row">
                                <div class="col-md-4 col-lg-4">
                                    <div class="form-group form-group-default">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" value="">
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4">
                                    <div class="form-group form-group-default">
                                        <label for="phone">Phone</label>
                                        <input type="text" class="form-control" id="phone" value="">
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4">
                                    <div class="form-group form-group-default">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" id="email" value="" disabled>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4">
                                    <div class="form-group form-group-default">
                                        <label for="cccd">CCCD</label>
                                        <input type="text" class="form-control" id="cccd" value="">
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4">
                                    <div class="form-group form-group-default">
                                        <label for="dob">Date of Birth</label>
                                        <input type="date" class="form-control" id="dob" value="">
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4">
                                    <div class="form-group form-group-default">
                                        <label for="gender">Gender</label>
                                        <select class="form-select" id="selectGender">
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4">
                                    <div class="form-group form-group-default">
                                        <label for="password">Password</label>
                                        <input type="text" class="form-control" id="password" value="">
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-8">
                                    <div class="form-group form-group-default">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control" id="address" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row row-demo-grid">
                                <div class="col-md-4 ms-auto">
                                    <div style="text-align: right">
                                        <button class="btn btn-success">Update</button>
                                    </div>
                                </div>
                            </div>
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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary crop_image">Crop</button>
                </div>
            </div>
        </div>
    </div>
@endsection
