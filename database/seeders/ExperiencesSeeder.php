<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Seeder;

class ExperiencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Experience::create([
            'title' => 'Web Developer',
            'company' => 'PT. Telkom Indonesia',
            'description' => 'Web Developer at PT. Telkom Indonesia',
            'status_label' => 'Full-time',
            'start_date' => '2022-01-01',
            'end_date' => null,
            'order_number' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Experience::create([
            'title' => 'Web Developer',
            'company' => 'PT. Telkom Indonesia',
            'description' => 'Web Developer at PT. Telkom Indonesia',
            'status_label' => 'Full-time',
            'start_date' => '2022-01-01',
            'end_date' => null,
            'order_number' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
