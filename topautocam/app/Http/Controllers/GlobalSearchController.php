<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
use App\Models\Car;
use App\Models\Motorbike;
use App\Models\Part;

class GlobalSearchController extends Controller
{
    
    public function globalSearch(Request $request) {
        $announcements = Announcement::latest()
        ->take(12)->get();

        $q = $request->input('title');
        $cars = Car::search($q, "title" ,"asc", null, null, null, null, null,null);
        $featuredMotorbikes = Motorbike::search($q, "title" ,"asc", null, null, null, null, null,null);
        $featuredParts = Part::search($q, "title" ,"asc",null, null, null, null, null,null);
        return view('front.layouts.global_search', [
            'announcements' => $announcements,
            'featuredCars'=>$cars,
            'featuredMotorbikes' => $featuredMotorbikes,
            'featuredParts' => $featuredParts,
        ]);
    }
    
}

