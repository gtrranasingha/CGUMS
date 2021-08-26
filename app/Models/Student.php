<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory; 
    protected $fillable = [
        'St_id',
        'f_name',
        'l_name',
        'personal_email',
        'uni_email',
        'per_address',
        'mobile',
        'mob_address',
        'degree',
        'gpa',
        'cv',
        'image',
        'nic',
        'faculty'
    ];
}
