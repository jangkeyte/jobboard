<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //\App\Models\Company::factory(20)->create();
        //\App\Models\CompanyIndustry::factory(30)->create();
        //\App\Models\CompanySize::factory(6)->create();   
        \App\Models\CompanyLocation::factory(20)->create();
    }
}
