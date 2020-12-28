<?php

namespace App\Models;

use App\Util\UTIL;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table = 'car';

    public function images()
    {
        return $this->hasMany(CarImage::class);
    }

    public function sold()
    {
        $this->status = UTIL::INVENTORY_STATUS['SOLD'];
        $this->save();
    }

    public function returned()
    {
        $this->status = UTIL::INVENTORY_STATUS['IN_STOCK'];
        $this->save();
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public static function featureds($size) 
    {
        return Car::where('selected', UTIL::SELECTED['FEATURED'])
            ->where('status', UTIL::INVENTORY_STATUS['IN_STOCK'])
            ->orderBy('id', 'DESC')->take($size)->get();
    }

    public static function recents($size) 
    {
        return Car::where('status', UTIL::INVENTORY_STATUS['IN_STOCK'])
            ->latest()->take($size)->get();
    }

}
