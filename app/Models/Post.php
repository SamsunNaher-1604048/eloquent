<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsToMany(Category::class,'category_posts','post_id','category_id');
    }

    public function image(){
        return $this->morphOne(Image::class,'imageable');
    }

    
    public function images(){
        return $this->morphMany(Image::class,'imageable');
    }


    public function tag(){
        return $this->morphToMany(Tag::class,'taggable');
    }
}
