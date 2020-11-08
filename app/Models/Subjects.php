<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subjects extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'level_id'
    ];
    protected $table = 'subjects';

    public function level()
    {
        return $this->belongsTo(Levels::class);
    }
}
