<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $table = 'educations';
    protected $fillable = ['institution', 'major', 'degree', 'description', 'start_date', 'end_date', 'icon_class', 'order_number'];
}
