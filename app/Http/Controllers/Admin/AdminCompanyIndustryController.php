<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CompanyIndustry;
use App\Models\Company;

class AdminCompanyIndustryController extends Controller
{
    public function index()
    {
        $company_industries = CompanyIndustry::get();
        return view('admin.company_industry', compact('company_industries'));
    }

    public function create()
    {
        return view('admin.company_industry_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $obj = new CompanyIndustry();
        $obj->name = $request->name;
        $obj->save();

        return redirect()->route('admin_company_industry')->with('success', __('Data is saved successfully.'));
    }
    
    public function edit($id)
    {
        $company_industry_single = CompanyIndustry::where('id', $id)->first();
        return view('admin.company_industry_edit', compact('company_industry_single'));
    }

    public function update(Request $request)
    {
        $obj = CompanyIndustry::where('id', $request->id)->first();

        $request->validate([
            'name' => 'required'
        ]);

        $obj->name = $request->name;
        $obj->update();

        return redirect()->route('admin_company_industry')->with('success', __('Data is updated successfully.'));
    }
    
    public function delete($id)
    {
        $check = Company::where('company_industry_id', $id)->count();
        if($check > 0) {
            return redirect()->back()->with('error', __('You can not delete this item, because this is used in another place.'));
        }
        CompanyIndustry::where('id', $id)->delete();
        return redirect()->route('admin_company_industry')->with('success', __('Data is deleted successfully.'));
    }

}
