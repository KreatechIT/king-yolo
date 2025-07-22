<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyTimeline extends Model
{
    protected $fillable = [
        'title', 'year', 'description'
    ];
}
