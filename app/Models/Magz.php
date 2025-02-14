<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Magz extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'banner',
        'link',
        'description',
    ];
}
