<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
    protected $fillable = ['cat_id', 'title', 'description', 'url', 'thumbnail_id'];
}
