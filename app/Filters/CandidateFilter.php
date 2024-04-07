<?php

namespace App\Filters;

use App\Filters\QueryFilter;

class CandidateFilter extends QueryFilter
{
    protected $filterable = [
        'sector_id',
    ];
    
    public function filterName($value)
    {
        return $this->builder
                    ->where(function ($query) use ($value) {
                        $query->where('name', 'like', '%' . $value . '%');
                    });
    }
}