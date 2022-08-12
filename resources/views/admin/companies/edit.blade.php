@extends('layouts.admin.app')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit Company</h4>
                            <form class="forms-sample" method="post" action="{{ url('updateCompany/' . $company->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="companyName"></label>
                                    <input type="text" name="name" class="form-control" id="companyName"
                                        placeholder="Company Name" value="{{ $company->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" id="email"
                                        placeholder="Email" value="{{ $company->email }}">
                                </div>
                                <div class="form-group">
                                    <label for="websiteUrl">Website URL</label>
                                    <input type="text" name="website" class="form-control" id="websiteUrl"
                                        placeholder="Website Url" value="{{ $company->website }}">
                                </div>
                                <div class="form-group">
                                    <input type="file" name="image">
                                </div>
                                <button type="submit" class="btn btn-danger me-2">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
