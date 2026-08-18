<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    use HasFactory;
     const TABLE = 'colleges';
    protected $table = self::TABLE;
    protected $fillable = [
        'name',
        'overview',
        'why_banodoctor',
        'courses',
        'content',
        'admission_process',
        'documents',
        'fee_structure',
        'faq',
        'country',
        'state',
        'city',
        'address',
        'image',
        'card_image',
        'hero_section_image',
        'slug',
        'category',
        'seo_meta_title',
        'seo_meta_keywords',
        'seo_meta_description',
        'fee_nri_quota',
        'fee_management_quota',
        'fee_state_quota',
        'college_type',
        'canonical_link',
        'youtube_video_embed'
    ];
}
