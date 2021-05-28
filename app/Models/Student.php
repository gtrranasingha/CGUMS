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
        'email',
        'password',
        'mobile',
        'address',
        'dob',
        'nic',
        'faculty'
    ];
}