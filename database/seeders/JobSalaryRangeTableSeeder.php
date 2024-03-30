<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobSalaryRangeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = array('3', '5', '6', '10', '15', '20', '30', '40', '50', '60', '70');
        foreach($data as $item) {
            \App\Models\JobSalaryRange::factory()->create([     
                'name' => 'Từ ' . $item . '.000.000 đ',
            ]);
        }
    }
}
