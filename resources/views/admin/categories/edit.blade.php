@extends('layouts.admin.app')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit Category</h4>
                            <form class="forms-sample" method="post" action="{{ url('updateCategory/' . $category->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="companyName"></label>
                                    <input type="text" name="name" class="form-control" id="companyName"
                                        placeholder="Category Name" value="{{ $category->name }}">
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
