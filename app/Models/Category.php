<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'image',
        'meta_title',
        'meta_description',
        'meta_keywords'
    ];

    protected static function booted()
    {
        static::creating(function ($category) {
            if (!$category->slug) {
                $category->slug = Str::slug($category->name, '-');
            }
        });
    }
}
