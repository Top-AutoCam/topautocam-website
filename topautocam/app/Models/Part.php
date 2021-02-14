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

    public static function search($search, $sort, $order, $make, $model, $color)
    {
        return
            Part::when($search, function ($query, $search) {
                return $query->where('title', 'like', '%'.$search.'%')
                            ->orWhere('detail', 'like', '%'.$search.'%');
            })
            ->when($make, function ($query, $make) {
                return $query->where('make', $make);
            })
            ->when($model, function ($query, $model) {
                return $query->where('model', $model);
            })
            ->when($color, function ($query, $color) {
                return $query->where('color', $color);
            })
            ->where('status', UTIL::INVENTORY_STATUS['IN_STOCK'])
            ->orderBy($sort, $order)
            ->paginate(UTIL::RESULTS_PER_PAGE);
    }
}
