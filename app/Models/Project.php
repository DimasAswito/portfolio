<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    
    protected $fillable = ['title', 'description', 'image_path', 'project_url', 'github_url', 'order_number'];
}
