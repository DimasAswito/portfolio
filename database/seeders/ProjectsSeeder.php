<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            'title' => 'Project 1',
            'description' => 'Description 1',
            'image_path' => 'path/to/image1.jpg',
            'project_url' => 'http://example.com',
            'github_url' => 'http://github.com',
            'order_number' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Project::create([
            'title' => 'Project 2',
            'description' => 'Description 2',
            'image_path' => 'path/to/image2.jpg',
            'project_url' => 'http://example.com',
            'github_url' => 'http://github.com',
            'order_number' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Project::create([
            'title' => 'Project 3',
            'description' => 'Description 3',
            'image_path' => 'path/to/image3.jpg',
            'project_url' => 'http://example.com',
            'github_url' => 'http://github.com',
            'order_number' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
