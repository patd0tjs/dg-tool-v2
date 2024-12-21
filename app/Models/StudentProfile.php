<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentProfile extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'lrn',
        'l_name',
        'f_name',
        'm_name',
        'suffix',
        'bday',
        'gender',
        'religion',
        'address',
        'landline',
        'level_id'
    ];
}
