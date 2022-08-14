@extends('layouts.admin.app')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit Employee</h4>
                            <form class="forms-sample" method="post" action="{{ url('updateEmployee/' . $employee->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="firstName">First Name</label>
                                    <input type="text" name="first_name" class="form-control" id="firstName"
                                        placeholder="First Name" value="{{ $employee->first_name }}">
                                </div>
                                <div class="form-group">
                                    <label for="lastName">Last Name</label>
                                    <input type="text" name="last_name" class="form-control" id="lastName"
                                        placeholder="Last Name" value="{{ $employee->last_name }}">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" id="email"
                                        placeholder="Email" value="{{ $employee->email }}">
                                </div>
                                <div class="form-group">
                                    <label for="email">Company ID</label>
                                    <input type="number" name="company_id" class="form-control" id="companyId"
                                        placeholder="Company ID" value="{{ $employee->company_id }}">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" name="phone" class="form-control" id="phone"
                                        placeholder="Phone" value="{{ $employee->phone }}">
                                </div>
                                <button type="submit" class="btn btn-primary me-2">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
