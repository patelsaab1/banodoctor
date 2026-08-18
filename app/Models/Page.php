<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    const TABLE = 'pages';
    protected $table = self::TABLE;
    protected $fillable = [
         'page_title',
          'page_subtitle',
           'page_shortdescription',
        'title',
        'content',
        'image',
        'seo_meta_title',
        'seo_meta_keywords',
        'seo_meta_description',
        'slug',
        'faq',
        'canonical_link'
    ];
}
