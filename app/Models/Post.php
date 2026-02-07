<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // 1. Allow these fields to be filled by Filament
    protected $fillable = [
        'title',
        'slug',
        'image',
        'excerpt',
        'content',
        'is_published',
        'published_at',
    ];

    // 2. Cast fields to specific types (e.g., boolean for the toggle)
    protected $casts = [
        'is_published' => 'boolean',
        'published_at' => 'date',
    ];
}
