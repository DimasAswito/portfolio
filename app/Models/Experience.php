<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $table = 'experiences';
    protected $fillable = ['title', 'company', 'description', 'status_label', 'start_date', 'end_date', 'order_number'];
    
}
