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
            JobCategoryTableSeeder::class,
            JobExperienceTableSeeder::class,
            JobGenderTableSeeder::class,
            JobLocationTableSeeder::class,
            JobSalaryRangeTableSeeder::class,
            JobTypeTableSeeder::class,
        ]);
        
        //\App\Models\Candidate::factory(20)->create();
    }
}
