<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    const TABLE = 'subcategories';
    protected $table = self::TABLE;
    protected $fillable = [
        'category_id',
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
