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
        $this->call([
            CompanyIndustryTableSeeder::class,
            CompanySizeTableSeeder::class,
            CompanyLocationTableSeeder::class
        ]);
        
        //\App\Models\Company::factory(20)->create();
    }
}
