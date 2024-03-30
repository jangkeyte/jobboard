<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobGenderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = array('Nam', 'Nữ', 'Không xác định');
        foreach($data as $item) {
            \App\Models\JobGender::factory()->create([     
                'name' => $item,
            ]);
        }
    }
}
