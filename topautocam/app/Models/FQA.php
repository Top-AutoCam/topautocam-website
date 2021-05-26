<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FQA extends Model
{
    use HasFactory;
    protected $table = 'f_q_a_s';

    public static function list($size) {
        return FQA::orderBy('question', 'ASC')->take($size)->get();
    }
}
