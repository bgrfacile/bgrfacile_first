<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class school extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'logo',
        'cover'
    ];

    protected $table ='schools';
}