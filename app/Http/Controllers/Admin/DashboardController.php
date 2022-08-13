<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $totalCompanies = DB::table('companies')->count();
        $totalEmployees = DB::table('employees')->count();

        $data = [
            "totalCompanies" => $totalCompanies,
            "totalEmployees" => $totalEmployees
        ];

        return view('admin.dashboard', compact('data'));
    }
}
