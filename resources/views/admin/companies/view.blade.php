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
                            <h4 class="card-title">Companies List</h4>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Logo</th>
                                        <th>Website</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($companies as $company)
                                        <tr>
                                            <td>{{ $company->name }}</td>
                                            <td>{{ $company->email }}</td>
                                            <td><img src="{{ asset('images/companies/' . $company->logo) }}" height="200"
                                                    width="200" /></td>
                                            <td>{{ $company->website }}</td>
                                            <td><button type="submit" class="btn btn-primary me-2"><a
                                                        href="{{ url('editCompany/' . $company->id) }}"
                                                        style="color: #fff">Edit</a></button>
                                            </td>
                                            <td><button class="btn btn-danger me-2"><a onclick="return confirm('Are you sure you want to delete this item?');"
                                                        href="{{ url('deleteCompany/' . $company->id) }}"
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
            {{ $companies->links() }}
        </div>
    </div>
@endsection
