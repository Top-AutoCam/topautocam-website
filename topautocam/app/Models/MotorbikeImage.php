<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MotorbikeImage extends Model
{
    use HasFactory;

    protected $table = 'motorbike_image';

    public function motorbike()
    {
        return $this->belongsTo(Motorbike::class);
    }
}
