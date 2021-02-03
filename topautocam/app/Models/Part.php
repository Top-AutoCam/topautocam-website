<?php

namespace App\Models;

use App\Util\UTIL;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    use HasFactory;

    protected $table = "part";

    public function sold()
    {
        $this->status = config('enums.INVENTORY_STATUS')['SOLD'];
        $this->save();
    }

    public function returned()
    {
        $this->status = config('enums.INVENTORY_STATUS')['IN_STOCK'];
        $this->save();
    }

    public function images()
    {
        return $this->hasMany(PartImage::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public static function recents($size) 
    {
        return Part::where('status', UTIL::INVENTORY_STATUS['IN_STOCK'])
            ->latest()->take($size)->get();
    }
}
