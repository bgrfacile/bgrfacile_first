<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'diploma'
    ];

    protected $table = 'trainings';

    public function level(){
        return $this->hasMany(Levels::class);
    }
}
