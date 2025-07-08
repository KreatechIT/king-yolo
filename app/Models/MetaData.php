<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MetaData extends Model
{
    protected $fillable = ['page', 'meta_title', 'meta_description', 'keywords'];
}
