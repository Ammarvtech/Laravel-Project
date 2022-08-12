<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use Illuminate\Support\Facades\Storage;

class CompanyController extends Controller
{
    public function index()
    {
        return view('admin.companies.add');
    }

    public function store(Request $request)
    {
        $company = new Company;
        $company->name = $request->name;
        $company->email = $request->email;

        if($request->hasFile('image')){
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $image->move(public_path('/images/companies'),$image_name);
            $company->logo = $image_name;
        }

        $company->website = $request->website;
        $company->save();

        return redirect('viewCompanies')->with('status', 'Company Added Successfully');
    }

    public function view()
    {
        $companies = Company::all();
        return view('admin.companies.view', compact('companies'));
    }

    public function delete($id)
    {
        $company = Company::find($id);
        $company->delete();
        return redirect('viewCompanies')->with('status', 'Company Deleted');
    }

    public function edit($id)
    {
        $company = Company::find($id);
        return view('admin.companies.edit', compact('company'));
    }

    public function update(Request $request, $id)
    {
        $company = Company::find($id);
        $company->name = $request->name;
        $company->email = $request->email;

        if($request->hasFile('image')){
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $image->move(public_path('/images/companies'),$image_name);
            $company->logo = $image_name;
        }

        $company->website = $request->website;
        $company->update();
        return redirect('viewCompanies')->with('status', 'Company Updated Successfully');
    }
}
