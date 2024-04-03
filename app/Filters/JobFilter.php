<?php

namespace App\Filters;

use App\Filters\QueryFilter;

class JobFilter extends QueryFilter
{
    protected $filterable = [
        'job_category_id',
        'job_location_id',        
        'job_type_id',
        'job_experience_id',
        'job_gender_id',
        'job_salary_range_id',  
    ];
    
    public function filterTitle($value)
    {
        return $this->builder
                    ->where(function ($query) use ($value) {
                        $query->where('title', 'like', '%' . $value . '%');
                    });
    }
    
}