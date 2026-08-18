<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CutOffEnquiryModel extends Model
{
    use HasFactory;
    const TABLE = 'cut_off_enquiry';
    protected $table = self::TABLE;
    protected $fillable = [
        'mobile',
        'fullName',
        'neetScore',    
    ];
}
