<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use Illuminate\Http\Request;
use DB;

class CompanyController extends Controller
{
    //
    public function currentCompany(Request $request)
    {
        return response()->json(Companies::get());
    }
}
