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

        $q = $request->input('q');
        $cars = Car::searchGlobal($q, "id" ,"asc", $q, $q, $q, $q, $q);
        $featuredMotorbikes = Motorbike::searchGlobal($q, "id" ,"asc", $q, $q, $q, $q, $q);
        $featuredParts = Part::searchGlobal($q, "id" ,"asc", $q, $q, $q, $q, $q);
        return view('front.layouts.global_search', [
            'announcements' => $announcements,
            'featuredCars'=>$cars,
            'featuredMotorbikes' => $featuredMotorbikes,
            'featuredParts' => $featuredParts,
        ]);
    }
    
}

