<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [
        "id", "creadted_at", "updated_at"
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag','post_tag');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Models\Category','post_category');
    }
}
