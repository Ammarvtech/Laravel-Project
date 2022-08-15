<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class FrontendController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $products = Product::all();

        return view('frontend.home', compact('categories', 'products'));
    }

    public function filterByCategory($catId)
    {
        $categories = Category::all();
        $products = Product::where('category_id', $catId)->get();

        return view('frontend.home', compact('categories', 'products'));
    }
}
