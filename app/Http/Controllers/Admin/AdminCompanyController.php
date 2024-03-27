<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\MOdels\Company;
use App\Models\CompanyPhoto;
use App\Models\CompanyVideo;

class AdminCompanyController extends Controller
{
    public function index() 
    {
        $companies = Company::where('status', 1)->get();
        return view('admin.companies', compact('companies'));
    }

    public function companies_detail($id) 
    {
        $companies_detail = Company::with('rCompanyLocation', 'rCompanyIndustry', 'rCompanySize')->where('id', $id)->first();
        $photos = CompanyPhoto::where('company_id', $id)->get();
        $videos = CompanyVideo::where('company_id', $id)->get();
        return view('admin.companies_detail', compact('companies_detail', 'photos', 'videos'));
    }
}
