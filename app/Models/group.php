<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class group extends Model
{
    use HasFactory;

    protected $fillable = [
        'Group_name',
        'password',
        'is_binusian',
        'is_verified'
    ];

    protected $attributes=[
        'is_verified' => 0
    ];

    protected $hidden = [
        'password'
    ];

}
