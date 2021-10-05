<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programme extends Model
{
    use HasFactory;

    protected $fillable = [
        'P_type',
        'P_name',
        'P_details',
        'P_resourceperson',
        'P_deadline',
        'capacity'
    ];
}
