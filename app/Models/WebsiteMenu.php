<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteMenu extends Model
{
    use HasFactory;
    const TABLE = 'website_menus';
    protected $table = self::TABLE;
    protected $fillable = [
        'title',
        'icon',
        'category',
        'submenu_status',
        'page_id',
        'post_id'
    ];
}
