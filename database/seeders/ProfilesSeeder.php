<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profile::create([
            'name' => 'Dimas Aswito',
            'headline' => 'Software Engineer | Full-stack Developer',
            'description' => 'A passionate software engineer with expertise in building modern web and mobile applications. Experienced in working with various technologies and frameworks to deliver high-quality solutions. Committed to continuous learning and self-improvement.',
            'about_text' => 'I am a Software Engineer with experience in building web and mobile applications. I am passionate about technology and constantly strive to improve my skills and knowledge. I am a team player and enjoy working in a collaborative environment.',
            'github_username' => 'https://github.com/dimasaswito',
            'email' => 'dimasaswito@gmail.com',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
