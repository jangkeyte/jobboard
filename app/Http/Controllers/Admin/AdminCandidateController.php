<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Candidate;
use App\Models\CandidateEducation;
use App\Models\CandidateSkill;
use App\Models\CandidateWorkExperience;
use App\Models\CandidateAward;
use App\Models\CandidateResume;
use App\Models\CandidateApplication;
use App\Models\CandidateBookmark;

class AdminCandidateController extends Controller
{
    public function index() 
    {
        $candidates = Candidate::where('status', 1)->paginate(10);
        return view('admin.candidates', compact('candidates'));
    }

    public function candidates_detail($id) 
    {
        $candidate_single = Candidate::where('id', $id)->first();
        $candidate_educations = CandidateEducation::where('candidate_id', $id)->get();
        $candidate_skills = CandidateSkill::where('candidate_id', $id)->get();
        $candidate_work_experiences = CandidateWorkExperience::where('candidate_id', $id)->get();
        $candidate_awards = CandidateAward::where('candidate_id', $id)->get();
        $candidate_resumes = CandidateResume::where('candidate_id', $id)->get();

        return view('admin.candidates_detail', compact('candidate_single', 'candidate_educations', 'candidate_skills', 'candidate_work_experiences', 'candidate_awards', 'candidate_resumes'));
    }
    
    public function candidates_applied_jobs($id) 
    {
        $applications = CandidateApplication::with('rJob')->where('candidate_id', $id)->paginate(10);
        return view('admin.candidates_applied_jobs', compact('applications'));

    }
    
    public function candidates_delete($id)
    {
        $resume_data = CandidateResume::where('candidate_id', $id);
        foreach($resume_data as $item) {
            CandidateApplication::where('candidate_id', $id)->delete();
            CandidateBookmark::where('candidate_id', $id)->delete();
        }

        CandidateApplication::where('candidate_id', $id)->delete();
        CandidateBookmark::where('candidate_id', $id)->delete();
        CandidateEducation::where('candidate_id', $id)->delete();
        CandidateWorkExperience::where('candidate_id', $id)->delete();
        CandidateAward::where('candidate_id', $id)->delete();
        CandidateSkill::where('candidate_id', $id)->delete();

        CandidateResume::where('candidate_id', $id)->delete();

        $candidate_data = Candidate::where('id', $id)->first();
        if($candidate_data->logo != null) {
            if(file_exists(public_path('uploads/' . $candidate_data->logo))) {
                unlink(public_path('uploads/' . $candidate_data->logo));
            }
        }
        Candidate::where('id', $id)->delete();   
        return redirect()->back()->with('success', 'Data is deleted successfully.');
    }
    
}
