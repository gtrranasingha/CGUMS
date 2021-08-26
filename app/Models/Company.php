<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
        'Com_name',
        'Com_id',
        'Com_description',
        'comp_tel',
        'comp_address',
        'email',
        'web',
        'logo'
    ];
}
