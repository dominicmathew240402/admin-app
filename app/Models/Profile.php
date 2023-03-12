<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $table = 'profiles';
    protected $fillable = ['id','uuid','title','staffname', 'youtube', 'Jobs', 'profilepic', 'text'];
    
}

