<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;
     use HasFactory;
    const TABLE = 'states';
    protected $table = self::TABLE;
    protected $fillable = [
      
'page_id',
'name',
'country_id',
'seo_meta_title',
'seo_meta_keywords',
'seo_meta_description'
    ];
}
