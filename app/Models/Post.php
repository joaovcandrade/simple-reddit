<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'postagem',
        'imagem',
        'video',
        'link',
        'voto',
    ];

    protected $attributes = [
        'voto' => 0,
    ];

}
