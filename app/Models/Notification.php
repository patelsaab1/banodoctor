<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;
      const TABLE = 'notifications';
    protected $table = self::TABLE;
    protected $fillable = [
        'title',
        'content',
        'image',
        'slug',
        'seo_meta_title',
        'seo_meta_keywords',
        'seo_meta_description',
        'canonical_link'
       
    ];
}
