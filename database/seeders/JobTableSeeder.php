<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            JobCategoryTableSeeder::class,
            JobExperienceTableSeeder::class,
            JobGenderTableSeeder::class,
            JobLocationTableSeeder::class,
            JobSalaryRangeTableSeeder::class,
            JobTypeTableSeeder::class
        ]);
        
        \App\Models\Job::factory(99)->create();

    }
}
