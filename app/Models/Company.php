<?php

namespace App\Models;

use App\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Company extends Authenticatable
{
    use HasFactory, Filterable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'facebook_id',
    ]; 
 
    public function rJob()
    {
        return $this->hasMany(Job::class);
    }

    public function rCompanyIndustry()
    {
        return $this->belongsTo(CompanyIndustry::class, 'company_industry_id');
    }
    
    public function rCompanyLocation()
    {
        return $this->belongsTo(CompanyLocation::class, 'company_location_id');
    }
    
    public function rCompanySize()
    {
        return $this->belongsTo(CompanySize::class, 'company_size_id');
    }
    
}
