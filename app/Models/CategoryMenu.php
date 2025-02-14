<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryMenu extends Model
{
    protected $fillable = [
        'name',
        'slug'
    ];
}
