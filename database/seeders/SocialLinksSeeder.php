<?php

namespace Database\Seeders;

use App\Models\SocialLink;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SocialLinksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SocialLink::create([
            'platform' => 'GitHub',
            'url' => 'https://github.com/213123',
            'icon_class' => 'fab fa-github',
            'order_number' => 1,
        ]);
        SocialLink::create([
            'platform' => 'LinkedIn',
            'url' => 'https://www.linkedin.com/in/213123',
            'icon_class' => 'fab fa-linkedin',
            'order_number' => 2,
        ]);
        SocialLink::create([
            'platform' => 'Instagram',
            'url' => 'https://www.instagram.com/213123',
            'icon_class' => 'fab fa-instagram',
            'order_number' => 3,
        ]);
        SocialLink::create([
            'platform' => 'Facebook',
            'url' => 'https://www.facebook.com/213123',
            'icon_class' => 'fab fa-facebook',
            'order_number' => 4,
        ]);
        SocialLink::create([
            'platform' => 'Twitter',
            'url' => 'https://twitter.com/213123',
            'icon_class' => 'fab fa-twitter',
            'order_number' => 5,
        ]);
        SocialLink::create([
            'platform' => 'Tiktok',
            'url' => 'https://www.tiktok.com/@213123',
            'icon_class' => 'fab fa-tiktok',
            'order_number' => 6,
        ]);
    }
}
