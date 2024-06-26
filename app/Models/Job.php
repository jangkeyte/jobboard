<?php

namespace App\Models;

use App\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory, Filterable;
     
    public function rCandidateApplication()
    {
        return $this->hasMany(CandidateApplication::class);
    }

    public function rCompany()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }
    
    public function rJobCategory()
    {
        return $this->belongsTo(JobCategory::class, 'job_category_id');
    }
    
    public function rJobLocation()
    {
        return $this->belongsTo(JobLocation::class, 'job_location_id');
    }
    
    public function rJobType()
    {
        return $this->belongsTo(JobType::class, 'job_type_id');
    }
    
    public function rJobExperience()
    {
        return $this->belongsTo(JobExperience::class, 'job_experience_id');
    }
    
    public function rJobGender()
    {
        return $this->belongsTo(JobGender::class, 'job_gender_id');
    }
    
    public function rJobSalaryRange()
    {
        return $this->belongsTo(JobSalaryRange::class, 'job_salary_range_id');
    }
    
    public function vzt()
    {
        return visits($this);
    }
    
    public function visits()
    {
        return visits($this)->relation();
    }
}
