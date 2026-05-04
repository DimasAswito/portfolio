<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Skill::create([
            'name' => 'Laravel',
            'icon_class' => 'devicon-laravel-plain',
            'order_number' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Skill::create([
            'name' => 'CI4',
            'icon_class' => 'devicon-codeigniter-plain',
            'order_number' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Skill::create([
            'name' => 'HTML',
            'icon_class' => 'devicon-html5-plain',
            'order_number' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Skill::create([
            'name' => 'CSS',
            'icon_class' => 'devicon-css3-plain',
            'order_number' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Skill::create([
            'name' => 'JavaScript',
            'icon_class' => 'devicon-javascript-plain',
            'order_number' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Skill::create([
            'name' => 'jQuery',
            'icon_class' => 'devicon-jquery-plain',
            'order_number' => 6,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Skill::create([
            'name' => 'Bootstrap',
            'icon_class' => 'devicon-bootstrap-plain',
            'order_number' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Skill::create([
            'name' => 'Tailwind CSS',
            'icon_class' => 'devicon-tailwindcss-plain',
            'order_number' => 8,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Skill::create([
            'name' => 'MySQL',
            'icon_class' => 'devicon-mysql-plain',
            'order_number' => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Skill::create([
            'name' => 'PostgreSQL',
            'icon_class' => 'devicon-postgresql-plain',
            'order_number' => 10,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Skill::create([
            'name' => 'Git',
            'icon_class' => 'devicon-git-plain',
            'order_number' => 11,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Skill::create([
            'name' => 'GitHub',
            'icon_class' => 'devicon-github-plain',
            'order_number' => 12,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Skill::create([
            'name' => 'GitLab',
            'icon_class' => 'devicon-gitlab-plain',
            'order_number' => 13,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Skill::create([
            'name' => 'Flutter',
            'icon_class' => 'devicon-flutter-plain',
            'order_number' => 14,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Skill::create([
            'name' => 'Kotlin',
            'icon_class' => 'devicon-kotlin-plain',
            'order_number' => 15,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Skill::create([
            'name' => 'Dart',
            'icon_class' => 'devicon-dart-plain',
            'order_number' => 16,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
