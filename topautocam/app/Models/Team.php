<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $table = 'teams';

    public static function list($size) {
        return Team::orderBy('name', 'ASC')->take($size)->get();
    }
}
