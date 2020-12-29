<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie_book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
    ];

    public function books()
    {
        return $this->hasMany(Book::class)->orderBy('created_at','DESC');
    }
}
