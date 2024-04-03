<?php

namespace App\Filters;

use App\Filters\QueryFilter;

class CompanyFilter extends QueryFilter
{
    protected $filterable = [
        'company_industry_id',
        'company_location_id',        
        'company_size_id',
        'founded_on',
    ];
    
    public function filterName($value)
    {
        return $this->builder
                    ->where(function ($query) use ($value) {
                        $query->where('company_name', 'like', '%' . $value . '%');
                    });
    }
}