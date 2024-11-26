@extends('admin.index')
@section('body')
    <div class="container">
        <div class="page-inner">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
                <div>
                    <h3 class="fw-bold mb-3">List Account</h3>
                </div>
                <div class="ms-md-auto py-2 py-md-0">
                    <a href="#" class="btn btn-primary btn-round" data-bs-toggle="modal" data-bs-target="#addAccount">Add
                        Account</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            {{-- Modal Add --}}
                            <div class="modal fade" id="addAccount" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header border-0">
                                            <h5 class="modal-title">
                                                <span class="fw-mediumbold"> New Account</span>
                                            </h5>
                                        </div>
                                        <div class="modal-body">
                                            <p class="small">
                                                Create a new account using this form, make sure you
                                                fill them all
                                            </p>
                                            <form action="{{ route('add-account') }}" method="POST">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-6 ">
                                                        <div class="form-group form-group-default">
                                                            <label>Name</label>
                                                            <input id="name" type="text" class="form-control"
                                                                name="name" placeholder="fill name" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 ">
                                                        <div class="form-group form-group-default">
                                                            <label>Phone</label>
                                                            <input id="phone" type="text" class="form-control"
                                                                name="phone" maxlength="10" placeholder="fill phone" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group form-group-default">
                                                            <label>Email</label>
                                                            <input id="email" type="email" class="form-control"
                                                                name="email" placeholder="fill email" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group form-group-default">
                                                            <label>CCCD</label>
                                                            <input id="cccd" type="text" class="form-control"
                                                                name="cccd" maxlength="12" placeholder="fill CCCD" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group form-group-default">
                                                            <label>Date of Birth</label>
                                                            <input id="dob" type="date" class="form-control"
                                                                name="dob" placeholder="fill dob" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group form-group-default">
                                                            <label>Password</label>
                                                            <input id="password" type="text" class="form-control"
                                                                name="password" minlength="8"
                                                                placeholder="fill password" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group form-group-default">
                                                            <label>Gender</label>
                                                            <select class="form-select" id="gender" name="gender">
                                                                <option>Male</option>
                                                                <option>Female</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group form-group-default">
                                                            <label>Role</label>
                                                            <select class="form-select" id="role" name="role">
                                                                <option>Manager</option>
                                                                <option>User</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group form-group-default">
                                                            <label>Address</label>
                                                            <input id="address" type="text" class="form-control" name="address"
                                                                minlength="8" placeholder="fill address" />
                                                        </div>
                                                    </div>
                                                </div>

                                        </div>
                                        <div class="modal-footer border-0">
                                            <button type="submit" id="" class="btn btn-primary">
                                                Add
                                            </button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table id="add-row" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($account as $user)
                                            <tr>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->phone }}</td>
                                                <td>
                                                    <div class="form-button-action">
                                                        <a type="button" data-bs-toggle="tooltip" title=""
                                                            class="btn btn-link btn-primary" data-original-title="Detail"
                                                            href="{{ url('/detail-account-'. $user->id) }}">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                        <a type="button" data-bs-toggle="tooltip" title=""
                                                            class="btn btn-link btn-primary" data-original-title="Edit"
                                                            href="{{ route('account-edit') }}">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                        <a type="button" data-bs-toggle="tooltip" title=""
                                                            class="btn btn-link btn-danger" data-original-title="Remove">
                                                            <i class="fa fa-times"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
