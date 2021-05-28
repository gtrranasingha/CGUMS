<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CGU_Director_user extends Model
{
    use HasFactory;
    /**
     * The "type" of the primary key ID.
     *
     * @var string
     */
    protected $fillable = [
        'name',
        'nic',
        'dir_name',
        'password',
    ];

}
