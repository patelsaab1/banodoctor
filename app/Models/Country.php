<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
     use HasFactory;
    const TABLE = 'country';
    protected $table = self::TABLE;
    protected $fillable = [
        'name'
       
    ];
}
