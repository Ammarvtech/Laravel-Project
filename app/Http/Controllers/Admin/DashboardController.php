<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;


class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $totalCategories = Category::count();
        $totalEmployees = DB::table('employees')->count();

        $data = [
            "totalCategories" => $totalCategories,
            "totalEmployees" => $totalEmployees
        ];

        return view('admin.dashboard', compact('data'));
    }
}
