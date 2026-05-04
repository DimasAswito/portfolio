<?php

namespace Database\Seeders;

use App\Models\Education;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Education::create([
            'institution' => 'SMAN 1 Kutorejo',
            'major' => 'Science',
            'degree' => 'High School Diploma',
            'description' => 'SMA Negeri 1 Kutorejo is a high school located in Kutorejo, Mojokerto, East Java, Indonesia.',
            'start_date' => '2014-07-01',
            'end_date' => '2017-06-01',
            'icon_class' => 'devicon-windows8-plain',
            'order_number' => 1,
        ]);
    }
}
