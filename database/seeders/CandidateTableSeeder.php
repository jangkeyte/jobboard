<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CandidateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            FirstTableSeeder::class,
            JobGenderTableSeeder::class,
            JobTypeTableSeeder::class,
            JobExperienceTableSeeder::class,
            JobSalaryRangeTableSeeder::class,
        ]);
        /*
        \App\Models\Candidate::factory(20)->create();
        \App\Models\JobCategory::factory(10)->create();
        \App\Models\JobExperience::factory(10)->create();   
        \App\Models\JobGender::factory(3)->create();
        \App\Models\JobLocation::factory(20)->create();
        \App\Models\JobSalaryRange::factory(9)->create();
        \App\Models\JobType::factory(5)->create();
        */
    }
}
