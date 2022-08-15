<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddEmployeeRequest;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Company;


class EmployeesController extends Controller
{
    public function index()
    {
        $companies = Company::select('id','name')->get();
        return view('admin.employees.add', compact('companies'));
    }

    public function store(AddEmployeeRequest $request)
    {
        $employee = new Employee;
        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name;
        $employee->company_id = $request->company_id;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->save();

        return redirect('viewEmployee')->with('flash_message_success','Record Added Successfully');

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
        return redirect('viewEmployee')->with('flash_message_success','Record Deleted Successfully');

    }

    public function edit($id)
    {
        $employee = Employee::find($id);
        $companies = Company::select('id','name')->get();

        return view('admin.employees.edit', compact('employee','companies'));
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
        return redirect('viewEmployee')->with('flash_message_success','Record Updated Successfully');
    }

    public function filter($employeeName)
    {
        $data = Employee::where('first_name', $employeeName)->with('company')->get();
        return $data;
    }

}
