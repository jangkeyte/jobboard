<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PageHomeItem;
use App\Models\JobSalaryRange;
use App\Models\JobExperience;
use App\Models\JobType;
use App\Models\JobCategory;
use App\Models\JobLocation;
use App\Models\Job;
use App\Models\WhyChooseItem;
use App\Models\Testimonial;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $home_page_data = PageHomeItem::where('id', 1)->first();
        $job_categories = JobCategory::withCount('rJob')->orderBy('r_job_count', 'desc')->take(9)->get();
        $all_job_categories = JobCategory::orderBy('name', 'asc')->get();
        $all_job_locations = JobLocation::orderBy('name', 'asc')->get();
        $all_job_types = JobType::orderBy('id', 'asc')->get();
        $all_job_experiences = JobExperience::orderBy('id', 'asc')->get();
        $all_job_salary_ranges = JobSalaryRange::orderBy('id', 'asc')->get();
        $why_choose_items = WhyChooseItem::take(4)->get();
        $testimonials = Testimonial::get();
        
        $featured_jobs = Job::with('rCompany', 'rJobCategory', 'rJobLocation', 'rJobType', 'rJobExperience', 'rJobGender', 'rJobSalaryRange')->where('is_featured', 1)->orderBy('id', 'desc')->take(6)->get();
        $refered_jobs = Job::with('rCompany', 'rJobCategory', 'rJobLocation', 'rJobType', 'rJobExperience', 'rJobGender', 'rJobSalaryRange')->orderBy('created_at', 'desc')->take(9)->get();

        $posts = Post::orderBy('created_at', 'desc')->take(4)->get();
        return view('front.home', compact('home_page_data', 'job_categories', 'all_job_categories', 'all_job_locations', 'all_job_types', 'all_job_experiences', 'all_job_salary_ranges', 'why_choose_items', 'testimonials', 'posts', 'featured_jobs', 'refered_jobs'));
    }

    public function switchLanguage($language)
    {
        session()->put('website_language', $language);

        return redirect()->back();
    }
}
