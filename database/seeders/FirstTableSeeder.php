<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FirstTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            OrderTableSeeder::class,
            PostTableSeeder::class,
            WhyChooseItemTableSeeder::class,
            FaqTableSeeder::class,
        ]);
        
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
        
        \App\Models\Banner::factory()->create([
            'banner_job_listing' => 'banner_default.jpg',
            'banner_job_detail' => 'banner_default.jpg',
            'banner_job_categories' => 'banner_default.jpg',
            'banner_company_listing' => 'banner_default.jpg',
            'banner_company_detail' => 'banner_default.jpg',
            'banner_pricing' => 'banner_default.jpg',
            'banner_blog' => 'banner_default.jpg',
            'banner_faq' => 'banner_default.jpg',
            'banner_post' => 'banner_default.jpg',
            'banner_contact' => 'banner_default.jpg',
            'banner_terms' => 'banner_default.jpg',
            'banner_privacy' => 'banner_default.jpg',
            'banner_signup' => 'banner_default.jpg',
            'banner_login' => 'banner_default.jpg',
            'banner_forget_password' => 'banner_default.jpg',
            'banner_company_panel' => 'banner_default.jpg',
            'banner_candidate_panel' => 'banner_default.jpg',
        ]);

        \App\Models\Setting::factory()->create([            
            'logo' => 'default_logo.jpg',
            'favicon' => 'default_favicon.jpg',
            'top_bar_phone' => '0123456789',
            'top_bar_email' => 'test@example.com',
            'footer_phone' => '0123456789',
            'footer_email' => 'test@example.com',
            'footer_address' => 'Viet Nam',
            'facebook' => 'https://facebook.com/',
            'twitter' => 'https://twitter.com/',
            'pinterest' => 'https://pinterest.com/',
            'linkedin' => 'https://linkedin.com/',
            'instagram' => 'https://instagram.com/',
            'copyright_text' => '',
        ]);

        \App\Models\Admin::factory()->create([     
            'name' => 'Administrator',
            'email' => 'admin@example.com',
            'password' => '$2y$12$ZqOZO0XbPS5Meddz1qpmgOObe4PWyQ7VD40auYvgIxH.3F/kFkZz2', // 123456
            'photo' => 'default_photo.jpg',
            'token' => '',
        ]);
        $package_data = array([
            'package_name' => 'Cơ bản',
            'package_price' => '19',
            'package_days' => '7',
            'package_display_time' => '',
            'total_allowed_jobs' => '5',
            'total_allowed_featured_jobs' => '0',
            'total_allowed_photos' => '0',
            'total_allowed_videos' => '0',
        ],[
            'package_name' => 'Tiêu chuẩn',
            'package_price' => '29',
            'package_days' => '30',
            'package_display_time' => '',
            'total_allowed_jobs' => '10',
            'total_allowed_featured_jobs' => '2',
            'total_allowed_photos' => '2',
            'total_allowed_videos' => '2',
        ],[
            'package_name' => 'Chuyên nghiệp',
            'package_price' => '49',
            'package_days' => '90',
            'package_display_time' => '',
            'total_allowed_jobs' => '-1',
            'total_allowed_featured_jobs' => '15',
            'total_allowed_photos' => '10',
            'total_allowed_videos' => '10',
        ]);

        foreach($package_data as $item) {
            \App\Models\Package::factory()->create([  
                'package_name' => $item['package_name'],
                'package_price' => $item['package_price'],
                'package_days' => $item['package_days'],
                'package_display_time' => $item['package_display_time'],
                'total_allowed_jobs' => $item['total_allowed_jobs'],
                'total_allowed_featured_jobs' => $item['total_allowed_featured_jobs'],
                'total_allowed_photos' => $item['total_allowed_photos'],
                'total_allowed_videos' => $item['total_allowed_videos']
            ]);
        }
    }
}
