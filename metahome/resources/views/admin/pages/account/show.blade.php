@extends('admin.index')
@section('body')
    <div class="container">
        <div class="page-inner">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
                <div>
                    <h3 class="fw-bold mb-3">List Account</h3>
                </div>
                <div class="ms-md-auto py-2 py-md-0">
                    <a href="{{route('account-create')}}" class="btn btn-primary btn-round">Add
                        Account</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
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
                                                            href="{{ url('/detail-account-' . $user->id) }}">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                        <a type="button" data-bs-toggle="tooltip" title=""
                                                            class="btn btn-link btn-primary" data-original-title="Edit"
                                                            href="{{ url('/edit-account-' . $user->id) }}">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                        <a type="button" data-bs-toggle="tooltip" title=""
                                                            class="btn btn-link btn-danger" data-original-title="Remove"
                                                            href="{{url('/delete-account-'.$user->id)}}">
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
