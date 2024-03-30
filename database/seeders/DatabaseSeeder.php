<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CandidateTableSeeder::class,
            CompanyTableSeeder::class,
            JobTableSeeder::class,
        ]);
        
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\PageHomeItem::factory()->create([
            'heading' => 'Heading content',
            'job_title' => 'Job Title',
            'job_category' => 'Job Category',
            'job_location' => 'Job Location',
            'search' => 'Search',
            'background' => 'background_default.jpg',
            'job_category_heading' => 'Job Category Heading',
            'job_category_status' => 'Show',
            'why_choose_heading' => 'Why Choose Heading',
            'why_choose_background' => 'background_default.jpg',
            'why_choose_status' => 'Show',
            'featured_jobs_heading' => 'Featured Jobs Heading',
            'featured_jobs_status' => 'Show',
            'testimonial_heading' => 'Testimonial Heading',
            'testimonial_background' => 'background_default.jpg',
            'testimonial_status' => 'Show',
            'blog_heading' => 'Blog Heading',
            'blog_status' => 'Show',
            'title' => 'Title',
            'meta_description' => 'Meta Description',
        ]);
    }
}
