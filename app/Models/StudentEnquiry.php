<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentEnquiry extends Model
{
    use HasFactory;
    protected $guarded = [];
     protected $casts = [
        'study_destinations' => 'array',
        'source_info' => 'array',
        'date_of_birth' => 'date',
    ];
}
