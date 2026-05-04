<?php

namespace Database\Seeders;

use App\Models\ProjectTag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectsTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProjectTag::create([
            'project_id' => 1,
            'name' => 'Web',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProjectTag::create([
            'project_id' => 1,
            'name' => 'Mobile',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProjectTag::create([
            'project_id' => 2,
            'name' => 'Web',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProjectTag::create([
            'project_id' => 2,
            'name' => 'Mobile',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProjectTag::create([
            'project_id' => 3,
            'name' => 'Web',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
