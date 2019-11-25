<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{


    protected $table = "store";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'cat_id',
        'description',
        'thumbnail',
        'author',
        'price',
        'contact',
    ];
}
