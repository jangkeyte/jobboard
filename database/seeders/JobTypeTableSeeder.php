<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = array('Toàn thời gian', 'Bán thời gian', 'Tự do', 'Tạm thời', 'Thực tập');
        foreach($data as $item) {
            \App\Models\JobType::factory()->create([     
                'name' => $item,
            ]);
        }
    }
}
