<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CheckOutController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('frontend.checkout', compact('categories'));
    }
}
