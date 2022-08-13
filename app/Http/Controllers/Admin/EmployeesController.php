<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\DB;

class EmployeesController extends Controller
{
    public function index()
    {
        $companies = DB::table('companies')->select('id')->get();
        return view('admin.employees.add', compact('companies'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:employees',
            'company_id' => 'required',
            'phone' => 'required',
        ]);

        $employee = new Employee;
        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name;
        $employee->company_id = $request->company_id;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->save();

        return redirect('viewEmployee')->with('status', 'Employee Added Successfully');
    }

     public function view()
    {
        $employees = Employee::paginate(2);
        return view('admin.employees.view', compact('employees'));
    }


    public function delete($id)
    {
        $employee = Employee::find($id);
        $employee->delete();
        return redirect('viewEmployee')->with('status', 'Employee Deleted');
    }

    public function edit($id)
    {
        $employee = Employee::find($id);
        return view('admin.employees.edit', compact('employee'));
    }

     public function update(Request $request, $id)
    {
        $employee = Employee::find($id);
        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name;
        $employee->email = $request->email;
        $employee->company_id = $request->company_id;
        $employee->phone = $request->phone;
        $employee->update();

        return redirect('viewEmployee')->with('status', 'Employee Updated Successfully');
    }

    public function filter($employeeName)
    {
        $data = Employee::where('first_name', $employeeName)->with('company')->get();
        return $data;
    }

}
