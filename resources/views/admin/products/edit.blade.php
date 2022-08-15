@extends('layouts.admin.app')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit Products</h4>
                            <form class="forms-sample" method="post" action="{{ url('updateProduct/' . $product->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Name" value="{{ $product->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="number" name="price" class="form-control" id="price"
                                        placeholder="Price" value="{{ $product->price }}">
                                </div>
                                <div class="form-group">
                                    <label for="color">Color</label>
                                    <input type="text" name="color" class="form-control" id="color"
                                        placeholder="Color" value="{{ $product->color }}">
                                </div>
                                <div class="form-group">
                                    <label for="size">Size</label>
                                    <input type="number" name="size" class="form-control" id="size"
                                        placeholder="Size" value="{{ $product->size }}">
                                </div>
                                <div class="form-group">
                                    <label for="email">Category ID</label>
                                    <select class="form-control" id="companyId" name="category_id">
                                        <option value="">Choose Company ID</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                @if ($category->id === $product->category_id) selected="" @endif>{{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" name="image" class="form-control" id="image"
                                        value="{{ $product->image }}">
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
