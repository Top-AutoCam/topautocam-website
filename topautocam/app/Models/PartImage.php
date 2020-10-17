<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartImage extends Model
{
    use HasFactory;

    protected $table = "part_image";

    public function part()
    {
        return $this->belongsTo(Part::class);
    }
}
