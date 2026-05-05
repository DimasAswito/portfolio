<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles';
    protected $fillable = ['name', 'headline', 'description', 'about_text', 'github_username', 'email'];
}
