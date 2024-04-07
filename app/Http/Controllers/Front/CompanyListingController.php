<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Filters\CompanyFilter;
use App\Models\Job;
use App\Models\Company;
use App\Models\CompanyIndustry;
use App\Models\CompanyLocation;
use App\Models\CompanySize;
use App\Models\CompanyPhoto;
use App\Models\CompanyVideo;
use App\Models\Advertisement;
use App\Models\PageOtherItem;
use App\Models\Order;
use App\Mail\Websitemail;

class CompanyListingController extends Controller
{
    public function index(Request $request)
    {
        $company_industries = CompanyIndustry::orderBy('name', 'asc')->get();
        $company_locations = CompanyLocation::orderBy('name', 'asc')->get();
        $company_sizes = CompanySize::orderBy('id', 'asc')->get();
        $advertisement_data = Advertisement::where('id', 1)->first();
        $other_page_item = PageOtherItem::where('id', 1)->first();
                
        $form_data = $request;
        $companies = Company::withSum('rJob', 'vacancy')->filter(new CompanyFilter($request))->orderBy('id', 'desc')->paginate(10);
        // Get the data from previous request, if don't add here you can add appends($_GET) in pagination links()
        $companies = $companies->appends($request->all());

        return view('front.company_listing', compact('companies', 'company_industries', 'company_locations', 'company_sizes', 'advertisement_data', 'other_page_item', 'form_data'));
    }

    public function detail($id) 
    {        
        $order_data = Order::where('company_id', $id)->where('currently_active', 1)->first();
        if(date('Y-m-d') > $order_data?->expire_date) {
            return redirect()->route('home');
        }

        $company_single = Company::withCount('rJob')->with('rCompanyIndustry', 'rCompanyLocation', 'rCompanySize')->where('id', $id)->first();

        $company_photos = CompanyPhoto::where('company_id', $company_single->id)->get();
        $company_videos = CompanyVideo::where('company_id', $company_single->id)->get();
        $jobs = Job::with('rCompany', 'rJobCategory', 'rJobLocation', 'rJobType', 'rJobExperience', 'rJobGender', 'rJobSalaryRange')->where('company_id', $company_single->id)->orderBy('id', 'desc')->get();
        $other_page_item = PageOtherItem::where('id', 1)->first();
        return view('front.company', compact('company_single', 'company_photos', 'company_videos', 'jobs', 'other_page_item'));
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

        Mail::to($request->company_email)->send(new Websitemail($subject, $message));

        return redirect()->back()->with('success', __('Email is sent successfully.') );
        
    }
}
