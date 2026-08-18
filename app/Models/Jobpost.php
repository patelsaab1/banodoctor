<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobpost extends Model
{
    use HasFactory;
    use HasFactory;
    const TABLE = 'jobposts';
    protected $table = self::TABLE;
    protected $fillable = [
        'title',
        'content',
        'image',
       
    ];
}
