<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Filters\JobFilter;
use App\Models\Job;
use App\Models\JobCategory;
use App\Models\JobLocation;
use App\Models\JobType;
use App\Models\JobExperience;
use App\Models\JobGender;
use App\Models\JobSalaryRange;
use App\Models\PageOtherItem;
use App\Models\Advertisement;
use App\Mail\Websitemail;

class JobListingController extends Controller
{
    public function index(Request $request)
    {
        $job_categories = JobCategory::orderBy('name', 'asc')->get();
        $job_locations = JobLocation::orderBy('name', 'asc')->get();
        $job_types = JobType::orderBy('id', 'asc')->get();
        $job_experiences = JobExperience::orderBy('id', 'asc')->get();
        $job_genders = JobGender::orderBy('id', 'asc')->get();
        $job_salary_ranges = JobSalaryRange::orderBy('id', 'asc')->get();
        $advertisement_data = Advertisement::where('id', 1)->first();
        $other_page_item = PageOtherItem::where('id', 1)->first();
        
        $form_data = $request;
        $raw_jobs = Job::with('visits')->filter(new JobFilter($request))->orderBy('id', 'desc')->get();

        $jobs = $raw_jobs->filter(function ($item) {
            $this_company_id = $item->rCompany->id;
            $order_data = \App\Models\Order::where('company_id', $this_company_id)->where('currently_active', 1)->first();
            if(date('Y-m-d') <= $order_data?->expire_date) {
                return $item;
            }
        })->values();

        //$jobs = $jobs->paginate(10);

        // Get the data from previous request, if don't add here you can add appends($_GET) in pagination links()
        // $jobs = $jobs->appends($request->all());

        return view('front.job_listing', compact('jobs', 'job_categories', 'job_locations', 'job_types', 'job_experiences', 'job_genders', 'job_salary_ranges', 'form_data', 'advertisement_data', 'other_page_item'));
    }

    public function detail($id)
    {        
        $job_single = Job::with('rCompany', 'rJobCategory', 'rJobLocation', 'rJobType', 'rJobExperience', 'rJobGender', 'rJobSalaryRange')->where('id', $id)->first();
        $jobs_related = Job::with('rCompany', 'rJobCategory', 'rJobLocation', 'rJobType', 'rJobExperience', 'rJobGender', 'rJobSalaryRange')->where('job_category_id', $job_single->job_category_id)->where('id', '<>', $id)->get();
        $other_page_item = PageOtherItem::where('id', 1)->first();        
        visits($job_single)->increment();
        //$job_single->vzt()->increment();
        return view('front.job', compact('job_single', 'jobs_related', 'other_page_item'));
    }

    public function send_email(Request $request)
    {        
        $request->validate([
            'visitor_name' => 'required',
            'visitor_email' => 'required|email',
            'visitor_phone' => 'required',
            'visitor_message' => 'required'
        ]);
        
        $subject = 'Enquery for job: ' . $request->job_title;
        $message = 'Visitor Information: <br>';
        $message .= 'Name:' . $request->visitor_name . '<br>';
        $message .= 'Email:' . $request->visitor_email . '<br>';
        $message .= 'Phone:' . $request->visitor_phone . '<br>';
        $message .= 'Message:' . $request->visitor_message;

        Mail::to($request->company_email)->send(new Websitemail($subject, $message));

        return redirect()->back()->with('success', __('Email is sent successfully.'));
    }
}
