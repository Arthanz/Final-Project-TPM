<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class leader extends Model
{
    use HasFactory;
    protected $fillable = [
        'Leader_ID',
        'name',
        'email',
        'WA_Number',
        'Line_ID',
        'Github_ID',
        'Birth_date',
        'Birth_place',
        'cv'
    ];
}
