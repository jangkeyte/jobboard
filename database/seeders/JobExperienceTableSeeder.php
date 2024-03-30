<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobExperienceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        $job_types = array('Chưa có kinh nghiệm', '1 tháng', '3 tháng', '6 tháng', '1 năm', '3 năm', '6 năm', '10 năm', '20 năm', 'Trên 20 năm');
        foreach($job_types as $item) {
            \App\Models\JobExperience::factory()->create([
                'name' => $item
            ]);
        }
    }
}
