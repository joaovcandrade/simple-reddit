<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reddit extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'owner',
        'description',
        'url'
    ];

}
