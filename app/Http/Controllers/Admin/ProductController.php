<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddProductRequest;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Company;
use App\Models\Product;
use App\Models\Category;


class ProductController extends Controller
{
    public function index()
    {
        $categories = Category::select('id','name')->get();
        return view('admin.products.add', compact('categories'));
    }

    public function store(AddProductRequest $request)
    {
        $product = new Product;
        $product->name = $request->name;

        if($request->hasFile('image')){
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $image->move(public_path('/images/products'),$image_name);
            $product->image = $image_name;
        }

        $product->price = $request->price;
        $product->color = $request->color;
        $product->size = $request->size;
        $product->category_id = $request->category_id;
        $product->save();

        return redirect('viewProducts')->with('flash_message_success','Record Added Successfully');

    }

     public function view()
    {
        $products = Product::paginate(4);
        return view('admin.products.view', compact('products'));
    }


    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('viewProducts')->with('flash_message_success','Record Deleted Successfully');

    }

    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::select('id','name')->get();

        return view('admin.products.edit', compact('product','categories'));
    }

    public function update(AddProductRequest $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->name;

        if($request->hasFile('image')){
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $image->move(public_path('/images/products'),$image_name);
            $product->image = $image_name;
        }

        $product->price = $request->price;
        $product->color = $request->color;
        $product->size = $request->size;
        $product->category_id = $request->category_id;

        $product->update();
        return redirect('viewProducts')->with('flash_message_success','Record Updated Successfully');
    }

    public function filter($employeeName)
    {
        $data = Employee::where('first_name', $employeeName)->with('company')->get();
        return $data;
    }

}
