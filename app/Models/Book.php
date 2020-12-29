<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'auteur',
        'resumer',
        'categorie_book_id',
        'user_id',
    ];

    public function categorieBook()
    {
        return $this->belongsTo(Categorie_book::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function podcast()
    {
        return $this->hasMany(Podcast::class)->orderBy('created_at','DESC');
    }
}
