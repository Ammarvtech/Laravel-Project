<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeesController extends Controller
{
    public function index()
    {
        return view('admin.employees.add');
    }

    public function store(Request $request)
    {
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
        $employees = Employee::all();
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

}
