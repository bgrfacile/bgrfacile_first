<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Levels extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'training_id'
    ];
    protected $table = 'levels';

    public function training(){
        return $this->belongsTo(Training::class);
    }

    public function subject(){
        return $this->hasMany(Subjects::class);
    }
}
