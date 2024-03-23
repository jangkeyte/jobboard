<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Company;
use App\Models\CompanyIndustry;
use App\Models\CompanyLocation;
use App\Models\CompanySize;
use App\Models\CompanyPhoto;
use App\Models\CompanyVideo;
use App\Mail\Websitemail;
use App\Models\Advertisement;

class CompanyListingController extends Controller
{
    public function index(Request $request)
    {
        
        $company_industries = CompanyIndustry::orderBy('name', 'asc')->get();
        $company_locations = CompanyLocation::orderBy('name', 'asc')->get();
        $company_sizes = CompanySize::orderBy('id', 'asc')->get();

        $form_name = $request->name;
        $form_industry = $request->industry;
        $form_location = $request->location;
        $form_size = $request->size;
        $form_founded_on = $request->founded_on;

        $companies = Company::withCount('rJob')->with('rCompanyIndustry', 'rCompanyLocation', 'rCompanySize')->orderBy('id', 'desc');

        if($request->name != null) {
            $companies = $companies->where('company_name', 'LIKE', '%' . $request->name . '%');
        }
        if($request->industry != null) {
            $companies = $companies->where('company_industry_id', $request->industry);
        }
        if($request->location != null) {
            $companies = $companies->where('company_location_id', $request->location);
        }
        if($request->size != null) {
            $companies = $companies->where('company_size_id', $request->size);
        }        
        if($request->founded_on != null) {
            $companies = $companies->where('founded_on', $request->founded_on);
        }
        
        $companies = $companies->paginate(10);

        // Get the data from previous request, if don't add here you can add appends($_GET) in pagination links()
        $companies = $companies->appends($request->all());

        $advertisement_data = Advertisement::where('id', 1)->first();

        return view('front.company_listing', compact('companies', 'company_industries', 'company_locations', 'company_sizes', 
                    'form_name', 'form_industry', 'form_location', 'form_size', 'form_founded_on', 'advertisement_data'));
    }

    public function detail($id)
    {        
        $company_single = Company::withCount('rJob')->with('rCompanyIndustry', 'rCompanyLocation', 'rCompanySize')->where('id', $id)->first();

        $company_photos = CompanyPhoto::where('company_id', $company_single->id)->get();
        $company_videos = CompanyVideo::where('company_id', $company_single->id)->get();
        $jobs = Job::with('rCompany', 'rJobCategory', 'rJobLocation', 'rJobType', 'rJobExperience', 'rJobGender', 'rJobSalaryRange')->where('company_id', $company_single->id)->orderBy('id', 'desc')->get();
        return view('front.company', compact('company_single', 'company_photos', 'company_videos', 'jobs'));
    }

    public function send_email(Request $request)
    {        
        
        $request->validate([
            'visitor_name' => 'required',
            'visitor_email' => 'required|email',
            'visitor_message' => 'required'
        ]);
        
        $subject = __('Contact Form Mesage: ') . $request->job_title;
        $message = __('Visitor Information: ') . '<br>';
        $message .= __('Name: ') . $request->visitor_name . '<br>';
        $message .= __('Email: ') . $request->visitor_email . '<br>';
        $message .= __('Phone: ') . $request->visitor_phone . '<br>';
        $message .= __('Message: ') . $request->visitor_message;

        \Mail::to($request->company_email)->send(new Websitemail($subject, $message));

        return redirect()->back()->with('success', __('Email is sent successfully.') );
        
    }
}
