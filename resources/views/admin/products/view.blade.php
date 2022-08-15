@extends('layouts.admin.app')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                @if (Session::has('flash_message_error'))
                    <div class="alert alert-error alert-block" style="margin: 18px;">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{!! session('flash_message_error') !!}</strong>
                    </div>
                @endif
                @if (Session::has('flash_message_success'))
                    <div class="alert alert-success alert-block" style="margin: 18px;">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{!! session('flash_message_success') !!}</strong>
                    </div>
                @endif
                <div class="col-lg-12 grid-margin stretch-card">

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Products List</h4>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Color</th>
                                        <th>Price</th>
                                        <th>Size</th>
                                        <th>Category ID</th>
                                        <th>Image</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->color }}</td>
                                            <td>{{ $product->price }}</td>
                                            <td>{{ $product->size }}</td>
                                            <td>{{ $product->category_id }}</td>
                                            <td class="image" data-title="No"><img
                                                    src="images/products/{{ $product->image }}" width="100"
                                                    height="100" alt="#"></td>
                                            <td><button type="submit" class="btn btn-primary me-2"><a
                                                        href="{{ url('editProduct/' . $product->id) }}"
                                                        style="color: #fff">Edit</a></button>
                                            </td>
                                            <td><button type="submit" class="btn btn-danger me-2"><a
                                                        onclick="return confirm('Are you sure you want to delete this item?');"
                                                        href="{{ url('deleteProduct/' . $product->id) }}"
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
            {{ $products->links() }}
        </div>
    </div>
@endsection
