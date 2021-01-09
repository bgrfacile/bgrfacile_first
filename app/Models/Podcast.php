<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Podcast extends Model
{
    use HasFactory;

    protected $fillable = [
        'resumer',
        'user_id',
        'book_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
    public function piste()
    {
        return $this->hasMany(Podcast::class)
            ->orderBy('podcasts.created_at','DESC');
    }
}
