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
            CandidateAwardTableSeeder::class,
            CandidateEducationTableSeeder::class,
            CandidateSkillTableSeeder::class,
            CandidateWorkExperienceTableSeeder::class,
            CandidateBookmarkTableSeeder::class,
        ]);

        \App\Models\Candidate::factory(50)->create();
    }
}
