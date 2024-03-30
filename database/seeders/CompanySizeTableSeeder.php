<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySizeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = array('1 - 4', '5 - 9', '10 - 19', '20 - 49', '50 - 99', '100 - 199', '200 - 499', '500 - 999', '999+');
        foreach($data as $item) {
            \App\Models\CompanySize::factory()->create([     
                'name' => $item . ' nhân viên',
            ]);
        }
    }
}
