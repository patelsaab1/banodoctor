<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    const TABLE = 'categories';
    protected $table = self::TABLE;
    protected $fillable = [
        'title',
        'icon',
        'content',
        'image',
        'seo_meta_title',
        'seo_meta_keywords',
        'seo_meta_description',
        'slug'
    ];
}
