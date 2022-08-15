@extends('layouts.admin.app')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Add Category</h4>
                            <form class="forms-sample" method="post" action="{{ url('storeCategory') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="companyName">Category Name</label>
                                    <input type="text" name="name" class="form-control" id="companyName"
                                        placeholder="Category Name">
                                </div>
                               
                                <button type="submit" class="btn btn-primary me-2">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
        </div>
    </div>
@endsection
