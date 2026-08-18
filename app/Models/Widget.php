<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Widget extends Model
{
    use HasFactory;
    const TABLE = 'website_widgets';
    protected $table = self::TABLE;
    protected $fillable = [
        'title',
        'widget_category',
        'icon',
        'image',
        'content',
        'page_id',
        'post_id',
        'seo_meta_title',
        'seo_meta_keywords',
        'seo_meta_description',
    ];
}
