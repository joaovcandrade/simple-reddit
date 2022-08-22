<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'usuario',
        'comentario',
        'voto'
    ];


    protected $attributes = [
        'voto' => 0,
    ];

}
