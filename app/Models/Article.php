<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'image',
        'detail_image',
        'category',
        'read_time',
        'content',
        'published_at'
    ];
}
