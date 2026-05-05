<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialLink extends Model
{
    protected $table = 'social_links';
    protected $fillable = ['platform', 'url', 'icon_class', 'order_number'];
}
