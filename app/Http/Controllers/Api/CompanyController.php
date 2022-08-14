<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Company;

class CompanyController extends Controller
{
    public function index(Request $request)
    {
      
        $request = $request->all();

        if(isset($request['name'])){

            $companies = Company::search($request['name'])->get();
           
        }else{
            $companies = Company::latest()->get();   
        }
        if(!empty($companies)){
            return response()->json([
                'message' => 'Records Fetched Successfully.',
                'data' => $companies,
            ]);
        }else{

            return response()->json([
                'data' => $companies,
                'message' => 'No Records Found.'
            ]);
        }
    }
}
