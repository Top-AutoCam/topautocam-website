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

    public static function search($sort, $order, $make, $model, $color, $drive, $fuel) 
    {
        return Car::when($make, function ($query, $make) {
                        return $query->where('make', $make);
                    })
                    ->when($model, function($query, $model) {
                        return $query->where('model', $model);
                   })
                   ->when($color, function($query, $color) {
                        return $query->where('color', $color);
                   })
                   ->when($drive, function($query, $drive) {
                        return $query->where('drive', $drive);
                    })
                   ->when($fuel, function($query, $fuel) {
                        return $query->where('fuel', $fuel);
                   })
                  ->orderBy($sort, $order)
                  ->paginate(UTIL::RESULTS_PER_PAGE);
    }

}
