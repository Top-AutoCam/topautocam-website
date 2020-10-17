<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Car;
use App\Models\Motorbike;
use App\Models\Part;

class SiteController extends Controller
{
    public function index()
    {
        // featured
        $featuredCars = Car::where('selected', config('enums.SELECTED.FEATURED'))
            ->where('status', config('enums.INVENTORY_STATUS.IN_STOCK'))
            ->orderBy('id', 'desc')->take(4)->get();

        $featuredMotorbikes = Motorbike::where('selected', config('enums.SELECTED.FEATURED'))
            ->where('status', config('enums.INVENTORY_STATUS.IN_STOCK'))
            ->orderBy('id', 'desc')->take(4)->get();

        $featuredParts = Part::where('selected', config('enums.SELECTED.FEATURED'))
            ->where('status', config('enums.INVENTORY_STATUS.IN_STOCK'))
            ->orderBy('id', 'desc')->take(4)->get();

        // recents
        $recentCars = Car::latest()
            ->where('status', config('enums.INVENTORY_STATUS.IN_STOCK'))
            ->take(12)->get();

        $recentMotorbikes = Motorbike::latest()
            ->where('status', config('enums.INVENTORY_STATUS.IN_STOCK'))
            ->take(12)->get();

        $recentParts = Part::latest()
            ->where('status', config('enums.INVENTORY_STATUS.IN_STOCK'))
            ->take(12)->get();

        $announcements = Announcement::latest()
            ->take(12)->get();

        return view('car/pages/home', [
            'announcements' => $announcements,
            'featuredCars' => $featuredCars,
            'featuredMotorbikes' => $featuredMotorbikes,
            'featuredParts' => $featuredParts,
            'recentCars' => $recentCars,
            'recentMotorbikes' => $recentMotorbikes,
            'recentParts' => $recentParts,
        ]);
    }

    public function cars() {

        $cars = Car::where('status', config('enums.INVENTORY_STATUS.IN_STOCK'))
            ->orderBy('id', 'desc')->get();

        $announcements = Announcement::latest()
            ->take(12)->get();

        return view('car/pages/cars', [
            'announcements' => $announcements,
            'cars' => $cars
        ]);
    }

    public function motorbikes() {

        $motorbikes = Motorbike::where('status', config('enums.INVENTORY_STATUS.IN_STOCK'))
            ->orderBy('id', 'desc')->get();

        $announcements = Announcement::latest()
            ->take(12)->get();

        return view('car/pages/motorbikes', [
            'announcements' => $announcements,
            'motorbikes' => $motorbikes
        ]);
    }

    public function parts() {

        $parts = Part::where('status', config('enums.INVENTORY_STATUS.IN_STOCK'))
            ->orderBy('id', 'desc')->get();

        $announcements = Announcement::latest()
            ->take(12)->get();

        return view('car/pages/parts', [
            'announcements' => $announcements,
            'parts' => $parts
        ]);
    }
    
    public function loan() {

        $announcements = Announcement::latest()
            ->take(12)->get();
            
        return view('car/pages/loan', [
            'announcements' => $announcements
        ]);   
    }
}
