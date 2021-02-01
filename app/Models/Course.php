<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Laravel\Scout\Searchable;

class Course extends Model //implements HasMedia
{
    use HasFactory;
//    use InteractsWithMedia;
//    use Searchable;

    protected $fillable = [
        'name',
        'user_id',
        'slug',
        'subject_id',
        'description',
        'contenue',
        'image_path',
    ];

    public function likes(){
        return $this->hasMany(Like::class);
    }
    public function likebyloggedInUser(){
        return $this->likes->where('user_id',auth()->user()->id)->isEmpty() ? false : true;
    }

    public function comments(){
        return $this->morphMany(Comment::class,'commentable')->latest();
    }
}
