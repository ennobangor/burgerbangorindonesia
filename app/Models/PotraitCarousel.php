<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PotraitCarousel extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'banner',
        'description',
    ];
}
