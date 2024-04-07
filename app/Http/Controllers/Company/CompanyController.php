<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Http\Requests\Company\UpdateCompanyRequest;
use App\Repositories\Company\CompanyRepositoryInterface;
use App\Models\Advertisement;
use App\Models\Candidate;
use App\Models\CandidateApplication;
use App\Models\CandidateEducation;
use App\Models\CandidateSkill;
use App\Models\CandidateWorkExperience;
use App\Models\CandidateAward;
use App\Models\CandidateResume;
use App\Models\CandidateBookmark;
use App\Models\Company;
use App\Models\CompanyLocation;
use App\Models\CompanyIndustry;
use App\Models\CompanySize;
use App\Models\CompanyPhoto;
use App\Models\CompanyVideo;
use App\Models\Job;
use App\Models\JobCategory;
use App\Models\JobLocation;
use App\Models\JobType;
use App\Models\JobExperience;
use App\Models\JobGender;
use App\Models\JobSalaryRange;
use App\Models\Order;
use App\Models\Package;
use App\Mail\Websitemail;
use App\Filters\CandidateFilter;
 
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class CompanyController extends Controller
{
    /**
     * @var CompanyRepositoryInterface
     */
    private $companyRepository;

    /**
     * CompanyController constructor.
     * 
     * @param CompanyRepositoryInterface $companyRepository
     */
    public function __construct(CompanyRepositoryInterface $companyRepository)
    {
        $this->companyRepository = $companyRepository;
    }

    public function dashboard()
    {
        $total_opened_jobs = Job::where('company_id', Auth::guard('company')->user()->id)->count();
        $total_featured_jobs = Job::where('company_id', Auth::guard('company')->user()->id)->where('is_featured', 1)->count();
        $total_urgent_jobs = Job::where('company_id', Auth::guard('company')->user()->id)->where('is_urgent', 1)->count();
        $jobs = Job::with('rJobCategory')->where('company_id', Auth::guard('company')->user()->id)->orderBy('id', 'desc')->take(3)->get();
        return view('company.dashboard', compact('jobs', 'total_opened_jobs', 'total_featured_jobs', 'total_urgent_jobs'));
    }

    public function orders()
    {
        $orders = Order::with('rPackage')->where('company_id', Auth::guard('company')->user()->id)->orderBy('id', 'desc')->get();
        return view('company.orders', compact('orders'));
    }

    public function edit_profile()
    {
        $company_locations = CompanyLocation::orderBy('name', 'asc')->get();
        $company_industries = CompanyIndustry::orderBy('name', 'asc')->get();
        $company_sizes = CompanySize::get();
        return view('company.edit_profile', compact('company_locations', 'company_industries', 'company_sizes'));
    }

    public function edit_profile_update(UpdateCompanyRequest $request)
    {
        
        $company = $this->companyRepository->updateCompany($request);
        return redirect()->back()->with('success', __('Profile is updated successfully.'));
    }

    public function edit_password()
    {
        return view('company.edit_password');
    }
    public function edit_password_update(Request $request)
    {   
        $obj = Company::where('email', Auth::guard('company')->user()->email)->first();            
        $request->validate([
            'password' => 'required',
            'retype_password' => 'required|same:password'
        ]);
        $obj->password = Hash::make($request->password);
        $obj->update();
        return redirect()->route('company_logout')->with('success', __('Password has changed successfully. Please relogin with your new password.'));
    }

    public function photos()
    {
        // Check if a person buy a package
        $order_data = Order::where('company_id', Auth::guard('company')->user()->id)->where('currently_active', 1)->first();

        if(!$order_data) {            
            return redirect()->back()->with('error', __('You have to buy a package first to access this page.'));
        }

        // Check if a person has access to this page under the current package
        $package_data = Package::where('id', $order_data->package_id)->first();

        if($package_data->total_allowed_photos == 0) {
            return redirect()->back()->with('error', __('Your current package does not allow to access the photo section.'));
        }

        $photos = CompanyPhoto::where('company_id', Auth::guard('company')->user()->id)->get();
        return view('company.photos', compact('photos'));
    }

    public function photos_submit(Request $request)
    {
        $order_data = Order::where('company_id', Auth::guard('company')->user()->id)->where('currently_active', 1)->first();
        $package_data = Package::where('id', $order_data->package_id)->first();
        $existing_photo_number = CompanyPhoto::where('company_id', Auth::guard('company')->user()->id)->count();

        if(date('Y-m-d') > $order_data?->expire_date) {
            return redirect()->back()->with('error', __('Your package is expired!'));
        }

        if($package_data->total_allowed_photos <= $existing_photo_number) {
            return redirect()->back()->with('error', __('Maximum number of allowed photo are uploaded. So you have to upgrade your package if you want to add more photos.'));
        }

        $obj = new CompanyPhoto();
        $request->validate([
            'photo' => 'required|image|mimes:jpg,jpeg,png,gif',
        ]);

        $ext = $request->file('photo')->extension();
        $final_name = 'company_photo_' . time() . '.' . $ext;
        $request->file('photo')->move(public_path('uploads/'), $final_name);

        $obj->photo = $final_name;
        $obj->company_id = Auth::guard('company')->user()->id;
        $obj->save();
        
        return redirect()->back()->with('success', __('Photo is uploaded successfully.'));
    }

    public function photos_delete($id)
    {
        $single_data = CompanyPhoto::where('id', $id)->first();
        if(file_exists(public_path('uploads/' . $single_data->photo))) {
            unlink(public_path('uploads/' . $single_data->photo));
        }
        CompanyPhoto::where('id', $id)->delete();
        return redirect()->back()->with('success', __('Photo is deleted successfully.'));
    }

    public function videos()
    {
        // Check if a person buy a package
        $order_data = Order::where('company_id', Auth::guard('company')->user()->id)->where('currently_active', 1)->first();

        if(!$order_data) {            
            return redirect()->back()->with('error', __('You have to buy a package first to access this page.'));
        }

        // Check if a person has access to this page under the current package
        $package_data = Package::where('id', $order_data->package_id)->first();

        if($package_data->total_allowed_videos == 0) {
            return redirect()->back()->with('error', __('Your current package does not allow to access the video section.'));
        }

        $videos = CompanyVideo::where('company_id', Auth::guard('company')->user()->id)->get();
        return view('company.videos', compact('videos'));
    }

    public function videos_submit(Request $request)
    {
        $order_data = Order::where('company_id', Auth::guard('company')->user()->id)->where('currently_active', 1)->first();
        $package_data = Package::where('id', $order_data->package_id)->first();
        $existing_video_number = CompanyVideo::where('company_id', Auth::guard('company')->user()->id)->count();

        if(date('Y-m-d') > $order_data?->expire_date) {
            return redirect()->back()->with('error', __('Your package is expired!'));
        }

        if($package_data->total_allowed_videos <= $existing_video_number) {
            return redirect()->back()->with('error', __('Maximum number of allowed video are uploaded. So you have to upgrade your package if you want to add more videos.'));
        }

        $request->validate([
            'video_id' => 'required',
        ]);

        $obj = new CompanyVideo();
        $obj->company_id = Auth::guard('company')->user()->id;
        $obj->video_id = $request->video_id;
        $obj->save();
        
        return redirect()->back()->with('success', __('Video is uploaded successfully.'));
    }

    public function videos_delete($id)
    {
        $single_data = CompanyVideo::where('id', $id)->first();
        CompanyVideo::where('id', $id)->delete();
        return redirect()->back()->with('success', __('Video is deleted successfully.'));
    }

    public function make_payment()
    {
        $packages = Package::get();
        $current_plan = Order::with('rPackage')->where('company_id', Auth::guard('company')->user()->id)->where('currently_active', 1)->first();

        return view('company.make_payment', compact(['current_plan', 'packages']));
    }

    public function paypal(Request $request)
    {
        $single_package_data = Package::where('id', $request->package_id)->first();
        
        if(1) {
            session()->put('package_id', $single_package_data->id);
            session()->put('package_price', $single_package_data->package_price);
            session()->put('package_days', $single_package_data->package_days);
            return redirect()->route('company_paypal_success');
        } else {
            return redirect()->route('company_paypal_cancel');
        }
    }

    public function paypal_success(Request $request)
    {
        if(1) {
            // Disable all current package status
            $data['currently_active'] = 0;
            Order::where('company_id', Auth::guard()->user()->id)->update($data);

            $days = session()->get('package_days');
            
            $obj = new Order();
            $obj->company_id = Auth::guard()->user()->id;
            $obj->package_id = session()->get('package_id');
            $obj->order_no = time();
            $obj->paid_amount = session()->get('package_price');
            $obj->payment_method = 'QR Code';
            $obj->start_date = date('Y-m-d');
            $obj->expire_date = date('Y-m-d', strtotime("+$days days"));
            $obj->currently_active = 1;
            $obj->save();

            return redirect()->route('company_make_payment')->with('success', __('Payment is successful!'));
        } else {
            return redirect()->route('company_paypal_cancel');
        }
    }
    
    public function paypal_cancel(Request $request)
    {
        return redirect()->route('company_make_payment')->with('error', __('Payment is cancelled!'));
    }

    public function jobs_create()
    {
        // Check if a person buy a package
        $order_data = Order::where('company_id', Auth::guard('company')->user()->id)->where('currently_active', 1)->first();

        if(!$order_data) {            
            return redirect()->back()->with('error', __('You have to buy a package first to access this page.'));
        }

        if(date('Y-m-d') > $order_data?->expire_date) {
            return redirect()->back()->with('error', __('Your package is expired!'));
        }

        // Check if a person has access to this page under the current package
        $package_data = Package::where('id', $order_data->package_id)->first();
        
        if($package_data->total_allowed_jobs == 0) {
            return redirect()->back()->with('error', __('Your current package does not allow to access the job section.'));
        }

        // Check how many jobs this company posted
        $total_jobs_posted = Job::where('company_id', Auth::guard('company')->user()->id)->count();
        if($package_data->total_allowed_jobs == $total_jobs_posted) {
            return redirect()->back()->with('error', __('You already have posted the maximum number of allowed jobs.'));
        }

        $job_categories = JobCategory::orderBy('name', 'asc')->get();
        $job_locations = JobLocation::orderBy('name', 'asc')->get();
        $job_types = JobType::orderBy('name', 'asc')->get();
        $job_experiences = JobExperience::orderBy('id', 'asc')->get();
        $job_genders = JobGender::orderBy('id', 'asc')->get();        
        $job_salary_ranges = JobSalaryRange::orderBy('id', 'asc')->get();
        return view('company.jobs_create', compact('job_categories', 'job_locations', 'job_types', 'job_experiences', 'job_genders', 'job_salary_ranges'));
    }

    public function jobs_create_submit(Request $request)
    {
        $request->validate([            
            'title' => 'required',
            'description' => 'required',
            'deadline' => 'required',
            'vacancy' => 'required',
        ]);

        $order_data = Order::where('company_id', Auth::guard('company')->user()->id)->where('currently_active', 1)->first();
        $package_data = Package::where('id', $order_data->package_id)->first();

        $total_featured_jobs = Job::where('company_id', Auth::guard('company')->user()->id)->where('is_featured', 1)->count();
        if($request->is_featured == 1 && $total_featured_jobs == $package_data->total_allowed_featured_jobs) {
            return redirect()->back()->with('error', __('You already have added the maximum number of featured jobs.'));
        }

        $obj = new Job();        
        $obj->company_id = Auth::guard('company')->user()->id;
        $obj->title = $request->title;
        $obj->description = $request->description;
        $obj->responsibility = $request->responsibility;
        $obj->skill = $request->skill;
        $obj->education = $request->education;
        $obj->benefit = $request->benefit;
        $obj->deadline = $request->deadline;
        $obj->vacancy = $request->vacancy;
        $obj->job_category_id = $request->job_category_id;
        $obj->job_location_id = $request->job_location_id;
        $obj->job_type_id = $request->job_type_id;
        $obj->job_experience_id = $request->job_experience_id;
        $obj->job_gender_id = $request->job_gender_id;
        $obj->job_salary_range_id = $request->job_salary_range_id;
        $obj->map_code = $request->map_code;
        $obj->is_featured = $request->is_featured;
        $obj->is_urgent = $request->is_urgent;
        $obj->save();

        return redirect()->back()->with('success', __('Job is posted successfully.'));
    }

    public function jobs()
    {
        $jobs = Job::where('company_id', Auth::guard('company')->user()->id)->orderBy('id', 'asc')->get();
        return view('company.jobs', compact('jobs'));
    }
    
    public function jobs_edit($id)
    {
        $job_single = Job::where('id', $id)->first();
        $job_categories = JobCategory::orderBy('name', 'asc')->get();
        $job_locations = JobLocation::orderBy('name', 'asc')->get();
        $job_types = JobType::orderBy('name', 'asc')->get();
        $job_experiences = JobExperience::orderBy('id', 'asc')->get();
        $job_genders = JobGender::orderBy('id', 'asc')->get();        
        $job_salary_ranges = JobSalaryRange::orderBy('id', 'asc')->get();

        return view('company.jobs_edit', compact('job_single', 'job_categories', 'job_locations', 'job_types', 'job_experiences', 'job_genders', 'job_salary_ranges'));
    }
    public function jobs_update(Request $request)
    {
        $request->validate([            
            'title' => 'required',
            'description' => 'required',
            'deadline' => 'required',
            'vacancy' => 'required',
        ]);

        $order_data = Order::where('company_id', Auth::guard('company')->user()->id)->where('currently_active', 1)->first();
        $package_data = Package::where('id', $order_data->package_id)->first();

        $total_featured_jobs = Job::where('company_id', Auth::guard('company')->user()->id)->where('is_featured', 1)->count();
        if($request->is_featured == 1 && $total_featured_jobs == $package_data->total_allowed_featured_jobs) {
            return redirect()->back()->with('error', __('You already have added the maximum number of featured jobs.'));
        }

        $obj = Job::where('id', $request->id)->first();
        $obj->title = $request->title;
        $obj->description = $request->description;
        $obj->responsibility = $request->responsibility;
        $obj->skill = $request->skill;
        $obj->education = $request->education;
        $obj->benefit = $request->benefit;
        $obj->deadline = $request->deadline;
        $obj->vacancy = $request->vacancy;
        $obj->job_category_id = $request->job_category_id;
        $obj->job_location_id = $request->job_location_id;
        $obj->job_type_id = $request->job_type_id;
        $obj->job_experience_id = $request->job_experience_id;
        $obj->job_gender_id = $request->job_gender_id;
        $obj->job_salary_range_id = $request->job_salary_range_id;
        $obj->map_code = $request->map_code;
        $obj->is_featured = $request->is_featured;
        $obj->is_urgent = $request->is_urgent;
        $obj->update();

        return redirect()->back()->with('success', __('Job is updated successfully.'));
    }
    
    public function jobs_delete($id)
    {
        Job::where('id', $id)->delete();
        CandidateApplication::where('job_id', $id)->delete();
        CandidateBookmark::where('job_id', $id)->delete();
        return redirect()->back()->with('success', __('Job is deleted successfully.'));
    }

    public function candidate_applications()
    {
        $jobs = Job::with('rJobCategory', 'rJobLocation', 'rJobType', 'rJobGender', 'rJobExperience', 'rJobSalaryRange')->where('company_id', Auth::guard('company')->user()->id)->get();
        return view('company.applications', compact('jobs'));
    }
    
    public function applicants($id)
    {
        $applicants = CandidateApplication::with('rCandidate')->where('job_id', $id)->get();

        $job_single = Job::where('id', $id)->first();
        return view('company.applicants', compact('applicants', 'job_single'));
    }
    
    public function applicant_resume($id)
    {
        $candidate_single = Candidate::where('id', $id)->first();
        $candidate_educations = CandidateEducation::where('candidate_id', $id)->get();
        $candidate_skills = CandidateSkill::where('candidate_id', $id)->get();
        $candidate_work_experiences = CandidateWorkExperience::where('candidate_id', $id)->get();
        $candidate_awards = CandidateAward::where('candidate_id', $id)->get();
        $candidate_resumes = CandidateResume::where('candidate_id', $id)->get();

        return view('company.applicant_resume', compact('candidate_single', 'candidate_educations', 'candidate_skills', 'candidate_work_experiences', 'candidate_awards', 'candidate_resumes'));
    }
    
    public function applicant_status_change(Request $request)
    {
        $request->validate([            
            'status' => 'required',
        ]);

        $obj = CandidateApplication::with('rCandidate')->where('candidate_id', $request->candidate_id)->where('job_id', $request->job_id)->first();
        $obj->status = $request->status;
        $obj->update();

        if($request->status == 'Approved') {

            // Sending email to candidates
            $candidate_email = $obj->rCandidate->email;            
            $detail_link = route('candidate_applications');
            
            $subject = __('Congratulation! Your application is approved.');
            $message = __('Please check the detail:') . '<br>';
            $message .= '<a href="' . $detail_link . '"> ' . __('Click here to see the detail.') . '</a>';

            Mail::to($request->email)->send(new Websitemail($subject, $message));
        }

        return redirect()->back()->with('success', __('Successfully.'));
    }
    
    public function candidate_listing(Request $request)
    {
        $candidate_sectors = JobCategory::get();
        $advertisement_data = Advertisement::where('id', 1)->first();

        $form_data = $request;
        $candidates = Candidate::with('rCandidateSector')->filter(new CandidateFilter($request))->orderBy('id', 'desc')->paginate(10);
        //dd($candidates);
        // Get the data from previous request, if don't add here you can add appends($_GET) in pagination links()
        $candidates = $candidates->appends($request->all());

        return view('front.candidate_listing', compact('candidates', 'candidate_sectors', 'form_data', 'advertisement_data'));
    }

    public function candidate_detail($id) 
    {
        $order_data = Order::with('rPackage')->where('company_id', Auth::guard('company')->user()->id)->where('currently_active', 1)->first();
        
        if($order_data->candidate_viewed >= $order_data->rPackage->total_allowed_candidate_view) {
            return redirect()->back()->with('error', __('You already viewed the maximum number of allowed candidate profile. You have to buy a new package to access this page.') );
        } else {
            $candidate_viewed = $order_data->candidate_viewed + 1;
            Order::where('company_id', Auth::guard('company')->user()->id)->where('currently_active', 1)->update(['candidate_viewed' => $candidate_viewed]);
        }

        $candidate_single = Candidate::where('id', $id)->first();

        return view('front.candidate_detail', compact('candidate_single'));
    }

}
