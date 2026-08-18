<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MegaMenuDropdown extends Model
{
    use HasFactory;

    const TABLE = 'website_mega_menu_dropdowns';
    protected $table = self::TABLE;
    protected $fillable = [
        'menu_id',
        'category_id',
        'title',
        'icon',
        'page_id',
        'post_id'
    ];
}
