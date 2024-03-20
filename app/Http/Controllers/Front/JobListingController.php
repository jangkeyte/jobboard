<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\JobCategory;
use App\Models\JobLocation;
use App\Models\JobType;
use App\Models\JobExperience;
use App\Models\JobGender;
use App\Models\JobSalaryRange;

class JobListingController extends Controller
{
    public function index(Request $request)
    {
        $job_categories = JobCategory::orderBy('name', 'asc')->get();
        $job_locations = JobLocation::orderBy('name', 'asc')->get();
        $job_types = JobType::orderBy('name', 'asc')->get();
        $job_experiences = JobExperience::orderBy('name', 'asc')->get();
        $job_genders = JobGender::orderBy('name', 'asc')->get();
        $job_salary_ranges = JobSalaryRange::orderBy('name', 'asc')->get();

        $form_title = $request->title;
        $form_category = $request->category;
        $form_location = $request->location;
        $form_type = $request->type;
        $form_experience = $request->experience;
        $form_gender = $request->gender;
        $form_salary_range = $request->salary_range;

        $jobs = Job::with('rCompany', 'rJobCategory', 'rJobLocation', 'rJobType', 'rJobExperience', 'rJobGender', 'rJobSalaryRange')->orderBy('id', 'desc');

        if($request->title != null) {
            $jobs = $jobs->where('title', 'LIKE', '%' . $request->title . '%');
        }
        if($request->category != null) {
            $jobs = $jobs->where('job_category_id', $request->category);
        }
        if($request->location != null) {
            $jobs = $jobs->where('job_location_id', $request->location);
        }
        if($request->type != null) {
            $jobs = $jobs->where('job_type_id', $request->type);
        }
        if($request->experience != null) {
            $jobs = $jobs->where('job_experience_id', $request->experience);
        }
        if($request->gender != null) {
            $jobs = $jobs->where('job_gender_id', $request->gender);
        }
        if($request->salary_range != null) {
            $jobs = $jobs->where('job_salary_range_id', $request->salary_range);
        }
        
        $jobs = $jobs->paginate(10);
        // Get the data from previous request, if don't add here you can add appends($_GET) in pagination links()
        $jobs = $jobs->appends($request->all());

        return view('front.job_listing', compact('jobs', 'job_categories', 'job_locations', 'job_types', 'job_experiences', 'job_genders', 'job_salary_ranges', 
                    'form_title', 'form_category', 'form_location', 'form_type', 'form_experience', 'form_gender', 'form_salary_range'));
    }

    public function detail($id)
    {
        $job_single = Job::with('rCompany', 'rJobCategory', 'rJobLocation', 'rJobType', 'rJobExperience', 'rJobGender', 'rJobSalaryRange')->where('id', $id)->first();
        return view('front.job', compact('job_single'));
    }
}
