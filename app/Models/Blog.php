<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
     const TABLE = 'blogs';
    protected $table = self::TABLE;
    protected $fillable = [
        'title',
        'category_id',
        'content',
        'image',
        'seo_meta_title',
        'seo_meta_keywords',
        'seo_meta_description',
        'slug',
        'canonical_link'
    ];
}
