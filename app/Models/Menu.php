<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Menu extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'image',
        'categorymenu_id',
    ];

    public function categorymenu(): BelongsTo
    {
        return $this->belongsTo(CategoryMenu::class);
    }
}
