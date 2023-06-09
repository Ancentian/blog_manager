<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'introduction',
        'excerpt',
        'body',
        'upload',
        'tag_id',
        'post_date',
        'author',
        'status'
    ];
}
