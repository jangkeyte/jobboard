<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Candidate;
use App\Models\CandidateEducation;
use App\Models\CandidateSkill;
use App\Models\CandidateWorkExperience;
use App\Models\CandidateAward;
use App\Models\CandidateResume;
use App\Models\CandidateBookmark;
use App\Models\CandidateApplication;
use App\Mail\Websitemail;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class CandidateController extends Controller
{
    public function dashboard()
    {
        $total_applied_jobs = CandidateApplication::where('candidate_id', Auth::guard('candidate')->user()->id)->where('status', 'Applied')->count();
        $total_rejected_jobs = CandidateApplication::where('candidate_id', Auth::guard('candidate')->user()->id)->where('status', 'Rejected')->count();
        $total_approved_jobs = CandidateApplication::where('candidate_id', Auth::guard('candidate')->user()->id)->where('status', 'Approved')->count();
        return view('candidate.dashboard', compact('total_applied_jobs', 'total_rejected_jobs', 'total_approved_jobs'));
    }
    
    public function edit_profile()
    {
        return view('candidate.edit_profile');
    }

    public function edit_profile_update(Request $request)
    {
        $obj = Candidate::where('id', Auth::guard('candidate')->user()->id)->first();
        $request->validate([
            'name' => 'required',
            'username' => ['required', 'alpha_dash', Rule::unique('candidates')->ignore(Auth::guard('candidate')->user()->id)],
            'email' => ['required', 'email', Rule::unique('candidates')->ignore(Auth::guard('candidate')->user()->id)],

        ]);

        if($request->hasFile('photo')) {
            $request->validate([
                'photo' => 'image|mimes:jpg,jpeg,png,gif',
            ]);

            if(Auth::guard('candidate')->user()->photo != '') {
                if(file_exists(public_path('uploads/' . $obj->photo))) {
                    unlink(public_path('uploads/' . $obj->photo));
                }
            }           

            $ext = $request->file('photo')->extension();
            $final_name = 'candidate_photo_' . time() . '.' . $ext;

            $request->file('photo')->move(public_path('uploads/'), $final_name);

            $obj->photo = $final_name;
        }

        $obj->name = $request->name;
        $obj->designation = $request->designation;
        $obj->username = $request->username;
        $obj->email = $request->email;
        $obj->phone = $request->phone;
        $obj->biography = $request->biography;
        $obj->phone = $request->phone;
        $obj->country = $request->country;
        $obj->address = $request->address;
        $obj->state = $request->state;
        $obj->city = $request->city;
        $obj->zip_code = $request->zip_code;
        $obj->gender = $request->gender;
        $obj->marital_status = $request->marital_status;
        $obj->date_of_birth = $request->date_of_birth;
        $obj->website = $request->website;
        $obj->update();

        return redirect()->back()->with('success', __('Profile is updated successfully.'));
    }

    public function edit_password()
    {
        return view('candidate.edit_password');
    }

    public function edit_password_update(Request $request)
    {   
        $obj = Candidate::where('email', Auth::guard('candidate')->user()->email)->first();            
        $request->validate([
            'password' => 'required',
            'retype_password' => 'required|same:password'
        ]);
        $obj->password = Hash::make($request->password);
        $obj->update();
        return redirect()->route('candidate_logout')->with('success', __('Password has changed successfully. Please relogin with your new password.'));
    }

    public function education()
    {
        $educations = CandidateEducation::where('candidate_id', Auth::guard('candidate')->user()->id)->get();
        return view('candidate.education', compact('educations'));
    }
    
    public function education_create()
    {        
        return view('candidate.education_create');
    }
    
    public function education_store(Request $request)
    {
        $request->validate([            
            'level' => 'required',
            'institute' => 'required',
            'degree' => 'required',
            'passing_year' => 'required',
        ]);

        $obj = new CandidateEducation();
        $obj->candidate_id = Auth::guard('candidate')->user()->id;
        $obj->level = $request->level;
        $obj->institute = $request->institute;
        $obj->degree = $request->degree;
        $obj->passing_year = $request->passing_year;
        $obj->save();
        
        return redirect()->route('candidate_education')->with('success', __('Education is created successfully.'));
    }
    
    public function education_edit($id)
    {
        $education_single = CandidateEducation::where('id', $id)->first();
        return view('candidate.education_edit', compact('education_single'));
    }
    
    public function education_update(Request $request)
    {
        $request->validate([            
            'level' => 'required',
            'institute' => 'required',
            'degree' => 'required',
            'passing_year' => 'required',
        ]);

        $obj = CandidateEducation::where('id', $request->id)->first();
        $obj->level = $request->level;
        $obj->institute = $request->institute;
        $obj->degree = $request->degree;
        $obj->passing_year = $request->passing_year;
        $obj->update();
        
        return redirect()->route('candidate_education')->with('success', __('Education is edited successfully.'));
    }
    
    public function education_delete($id)
    {
        CandidateEducation::where('id', $id)->delete();
        return redirect()->back()->with('success', __('Education is deleted successfully.'));
    }

    public function skill()
    {
        $skills = CandidateSkill::where('candidate_id', Auth::guard('candidate')->user()->id)->get();
        return view('candidate.skill', compact('skills'));
    }
    
    public function skill_create()
    {        
        return view('candidate.skill_create');
    }
    
    public function skill_store(Request $request)
    {
        $request->validate([            
            'name' => 'required',
            'percentage' => 'required',
        ]);

        $obj = new CandidateSkill();
        $obj->candidate_id = Auth::guard('candidate')->user()->id;
        $obj->name = $request->name;
        $obj->percentage = $request->percentage;
        $obj->save();
        
        return redirect()->route('candidate_skill')->with('success', __('Skill is created successfully.'));
    }
    
    public function skill_edit($id)
    {
        $skill_single = CandidateSkill::where('id', $id)->first();
        return view('candidate.skill_edit', compact('skill_single'));
    }
    
    public function skill_update(Request $request)
    {
        $request->validate([            
            'name' => 'required',
            'percentage' => 'required',
        ]);

        $obj = CandidateSkill::where('id', $request->id)->first();
        $obj->name = $request->name;
        $obj->percentage = $request->percentage;
        $obj->update();
        
        return redirect()->route('candidate_skill')->with('success', __('Skill is edited successfully.'));
    }
    
    public function skill_delete($id)
    {
        CandidateSkill::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Skill is deleted successfully.');
    }

    public function work_experience()
    {
        $work_experiences = CandidateWorkExperience::where('candidate_id', Auth::guard('candidate')->user()->id)->get();
        return view('candidate.work_experience', compact('work_experiences'));
    }
    
    public function work_experience_create()
    {        
        return view('candidate.work_experience_create');
    }
    
    public function work_experience_store(Request $request)
    {
        $request->validate([            
            'company' => 'required',
            'designation' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        $obj = new CandidateWorkExperience();
        $obj->candidate_id = Auth::guard('candidate')->user()->id;
        $obj->company = $request->company;
        $obj->designation = $request->designation;
        $obj->start_date = $request->start_date;
        $obj->end_date = $request->end_date;
        $obj->save();
        
        return redirect()->route('candidate_work_experience')->with('success', __('Work Experience is created successfully.'));
    }
    
    public function work_experience_edit($id)
    {
        $work_experience_single = CandidateWorkExperience::where('id', $id)->first();
        return view('candidate.work_experience_edit', compact('work_experience_single'));
    }
    
    public function work_experience_update(Request $request)
    {
        $request->validate([            
            'company' => 'required',
            'designation' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        $obj = CandidateWorkExperience::where('id', $request->id)->first();
        $obj->company = $request->company;
        $obj->designation = $request->designation;
        $obj->start_date = $request->start_date;
        $obj->end_date = $request->end_date;
        $obj->update();
        
        return redirect()->route('candidate_work_experience')->with('success', __('Work Experience is edited successfully.'));
    }
    
    public function work_experience_delete($id)
    {
        CandidateWorkExperience::where('id', $id)->delete();
        return redirect()->back()->with('success', __('Work Experience is deleted successfully.'));
    }

    public function award()
    {
        $awards = CandidateAward::where('candidate_id', Auth::guard('candidate')->user()->id)->get();
        return view('candidate.award', compact('awards'));
    }
    
    public function award_create()
    {        
        return view('candidate.award_create');
    }
    
    public function award_store(Request $request)
    {
        $request->validate([            
            'title' => 'required',
            'description' => 'required',
            'date' => 'required',
        ]);

        $obj = new CandidateAward();
        $obj->candidate_id = Auth::guard('candidate')->user()->id;
        $obj->title = $request->title;
        $obj->description = $request->description;
        $obj->date = $request->date;
        $obj->save();
        
        return redirect()->route('candidate_award')->with('success', __('Award is created successfully.'));
    }
    
    public function award_edit($id)
    {
        $award_single = CandidateAward::where('id', $id)->first();
        return view('candidate.award_edit', compact('award_single'));
    }
    
    public function award_update(Request $request)
    {
        $request->validate([         
            'title' => 'required',
            'description' => 'required',
            'date' => 'required',
        ]);

        $obj = CandidateAward::where('id', $request->id)->first();
        $obj->title = $request->title;
        $obj->description = $request->description;
        $obj->date = $request->date;
        $obj->update();
        
        return redirect()->route('candidate_award')->with('success', __('Award is edited successfully.'));
    }
    
    public function award_delete($id)
    {
        CandidateAward::where('id', $id)->delete();
        return redirect()->back()->with('success', __('Award is deleted successfully.'));
    }

    public function resume()
    {
        $resumes = CandidateResume::where('candidate_id', Auth::guard('candidate')->user()->id)->get();
        return view('candidate.resume', compact('resumes'));
    }
    
    public function resume_create()
    {        
        return view('candidate.resume_create');
    }
    
    public function resume_store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'file' => 'required|mimes:pdf,doc,docx',
        ]);

        $ext = $request->file('file')->extension();
        $final_name = 'resume_' . time() . '.' . $ext;
        $request->file('file')->move(public_path('uploads/'), $final_name);

        $obj = new CandidateResume();
        $obj->candidate_id = Auth::guard('candidate')->user()->id;
        $obj->name = $request->name;
        $obj->file = $final_name;
        $obj->save();
        
        return redirect()->route('candidate_resume')->with('success', __('Resume is created successfully.'));
    }
    
    public function resume_edit($id)
    {
        $resume_single = CandidateResume::where('id', $id)->first();
        return view('candidate.resume_edit', compact('resume_single'));
    }
    
    public function resume_update(Request $request)
    {
        $request->validate([         
            'name' => 'required',
        ]);

        $obj = CandidateResume::where('id', $request->id)->first();

        if($request->hasFile('file')) {
            
            $request->validate([      
                'file' => 'mimes:pdf,doc,docx',
            ]);

            if(file_exists(public_path('uploads/' . $obj->file))) {
                unlink(public_path('uploads/' . $obj->file));
            }    
            $ext = $request->file('file')->extension();
            $final_name = 'resume_' . time() . '.' . $ext;
            $request->file('file')->move(public_path('uploads/'), $final_name);
            $obj->file = $final_name;    
        }
        $obj->name = $request->name;
        $obj->update();
        
        return redirect()->route('candidate_resume')->with('success', __('Resume is edited successfully.'));
    }
    
    public function resume_delete($id)
    {
        $resume_data = CandidateResume::where('id', $id)->first();
        
        if(file_exists(public_path('uploads/' . $resume_data->file))) {
            unlink(public_path('uploads/' . $resume_data->file));
        }

        CandidateResume::where('id', $id)->delete();
        return redirect()->back()->with('success', __('Resume is deleted successfully.'));
    }

    public function bookmark_add($id)
    {
        $existing_bookmark_check = CandidateBookmark::where('candidate_id', Auth::guard('candidate')->user()->id)->where('job_id', $id)->count();

        if($existing_bookmark_check > 0) {
            return redirect()->back()->with('error', __('This job is already added to bookmark.'));
        }

        $obj = new CandidateBookmark();
        $obj->candidate_id = Auth::guard('candidate')->user()->id;
        $obj->job_id = $id;
        $obj->save();

        return redirect()->back()->with('success', __('Job is added to bookmark section successfully.'));
    }

    public function bookmark_view()
    {
        $bookmark_jobs = CandidateBookmark::with('rJob', 'rCandidate')->where('candidate_id', Auth::guard('candidate')->user()->id)->get();
        return view('candidate.bookmark', compact('bookmark_jobs'));
    }

    public function bookmark_delete($id)
    {                                           
        CandidateBookmark::where('id', $id)->delete();
        return redirect()->back()->with('success', __('Bookmark item is deleted successfully.'));
    }

    public function apply($id)
    {                               
        $existing_apply_check = CandidateApplication::where('candidate_id', Auth::guard('candidate')->user()->id)->where('job_id', $id)->count();

        if($existing_apply_check > 0) {
            return redirect()->back()->with('error', __('You already have applied on this job!'));
        }

        $job_single = Job::where('id', $id)->first();

        return view('candidate.apply', compact('job_single'));
    }

    public function apply_submit(Request $request)
    {             
        $request->validate([         
            'cover_letter' => 'required',
        ]);

        $obj = new CandidateApplication();
        $obj->candidate_id = Auth::guard('candidate')->user()->id;
        $obj->job_id = $request->id;
        $obj->cover_letter = $request->cover_letter;
        $obj->status = __('Applied');
        $obj->save();
        
        // Sending email to company
        $job_single = Job::with('rCompany')->where('id', $request->id);
        $company_email = $job_single->rCompany->email;
        $applicants_list = route('company_applicants', $request->id);
        
        $subject = __('A candidate applied to a job');
        $message = __('Please check the application:') . '<br>';
        $message .= '<a href="' . $applicants_list . '"> ' . __('Click here to see applicants list for this job') . '</a>';

        Mail::to($request->email)->send(new Websitemail($subject, $message));

        return redirect()->route('job', $request->id)->with('success', __('Your application is sent successfully.'));
    }

    public function apply_view()
    {                                           
        $application_jobs = CandidateApplication::with('rJob', 'rCandidate')->where('candidate_id', Auth::guard('candidate')->user()->id)->get();
        return view('candidate.applications', compact('application_jobs'));
    }

    public function apply_delete($id)
    {                                           
        CandidateApplication::where('id', $id)->delete();
        return redirect()->back()->with('success', __('Application item is deleted successfully.'));
    }

}
