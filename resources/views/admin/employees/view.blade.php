@extends('layouts.admin.app')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                @if(Session::has('flash_message_error'))
                    <div class="alert alert-error alert-block" style="margin: 18px;">
                        <button type="button" class="close" data-dismiss="alert">×</button> 
                        <strong>{!! session('flash_message_error') !!}</strong>
                    </div>
                @endif   
                @if(Session::has('flash_message_success'))
                <div class="alert alert-success alert-block" style="margin: 18px;">
                    <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{!! session('flash_message_success') !!}</strong>
                </div>
                @endif
                <div class="col-lg-12 grid-margin stretch-card">

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Employees List</h4>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>email</th>
                                        <th>Company ID</th>
                                        <th>Phone</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($employees as $employee)
                                        <tr>
                                            <td>{{ $employee->first_name }}</td>
                                            <td>{{ $employee->last_name }}</td>
                                            <td>{{ $employee->email }}</td>
                                            <td>{{ $employee->company_id }}</td>
                                            <td>{{ $employee->phone }}</td>
                                            <td><button type="submit" class="btn btn-primary me-2"><a
                                                        href="{{ url('editEmployee/' . $employee->id) }}"
                                                        style="color: #fff">Edit</a></button>
                                            </td>
                                            <td><button type="submit" class="btn btn-danger me-2"><a onclick="return confirm('Are you sure you want to delete this item?');"
                                                        href="{{ url('deleteEmployee/' . $employee->id) }}"
                                                        style="color: #fff">Delete</a></button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            {{ $employees->links() }}
        </div>
    </div>
@endsection
