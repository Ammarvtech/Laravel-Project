<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddCategoryRequest;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.categories.add');
    }

    public function store(AddCategoryRequest $request)
    {

        $category = new Category;
        $category->name = $request->name;

        $category->save();

        return redirect('viewCategories')->with('flash_message_success','Record Added Successfully');
    }

    public function view()
    {
        $categories = Category::paginate(2);
        return view('admin.categories.view', compact('categories'));
    }

    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('viewCategories')->with('flash_message_success','Record Deleted Successfully');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->name = $request->name;
        
        $category->update();
        return redirect('viewCategories')->with('flash_message_success','Record Updated Successfully');
    }
}
