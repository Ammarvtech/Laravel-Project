<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Employee;
use App\Models\Product;
use App\Models\Order;


class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $totalCategories = Category::count();
        $totalProducts = Product::count();
        $totalOrders = Order::count();

        return view('admin.dashboard', compact('totalCategories', 'totalProducts', 'totalOrders'));
    }
}
