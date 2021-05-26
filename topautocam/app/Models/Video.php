<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $table = 'videos';

    public static function list($size) {
        return Team::orderBy('urlFrame', 'ASC')->take($size)->get();
    }

    
}
