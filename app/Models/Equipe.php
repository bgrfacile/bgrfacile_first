<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    use HasFactory;

    protected $fillable = [
      'nom',
      'imagePath',
      'role',
      'link_facebook',
      'link_twitter',
      'link_whatsapp',
      'link_linkedin',
    ];
}
