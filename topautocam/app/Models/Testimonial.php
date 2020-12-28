<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $table = 'testimonial';

    public static function list($size) {
        return Testimonial::orderBy('name', 'ASC')->take($size)->get();
    }
}
