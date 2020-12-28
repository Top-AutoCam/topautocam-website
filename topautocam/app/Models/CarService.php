<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarService extends Model
{
    use HasFactory;

    protected $table = 'car_service';

    public static function list($size) {
        return CarService::orderBy('name', 'ASC')->take($size)->get();
    }
}
