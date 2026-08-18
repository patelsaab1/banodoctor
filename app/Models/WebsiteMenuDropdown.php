<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteMenuDropdown extends Model
{
    use HasFactory;
    const TABLE = 'website_menu_dropdowns';
    protected $table = self::TABLE;
    protected $fillable = [
        'menu_id',
        'title',
        'icon',
        'page_id',
        'post_id',
        'icon_image'
    ];
}
