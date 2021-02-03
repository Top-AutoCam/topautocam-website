<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Car;
use App\Models\CarService;
use App\Models\Motorbike;
use App\Models\Part;
use App\Models\Promotion;
use App\Models\Testimonial;
use App\Util\UTIL;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SiteController extends Controller {

    public function index() { 

        // featured
        $featuredCars = Car::featureds(5);
        $mainFeaturedCar = $featuredCars[0];
        $topLeftFeaturedCar = $featuredCars[1];
        $topRightFeaturedCar = $featuredCars[2];
        $bottomLeftFeaturedCar = $featuredCars[3];
        $bottomRightFeaturedCar = $featuredCars[4];

        $services = CarService::list(3);
        $promotions = Promotion::list(2);
        $testimonials = Testimonial::list(3);

        $recents = Car::recents(8);

        $featuredMotorbikes = Motorbike::where('selected', UTIL::SELECTED['FEATURED'])
            ->where('status', UTIL::INVENTORY_STATUS['IN_STOCK'])
            ->orderBy('id', UTIL::DESC)->take(4)->get();

        $featuredParts = Part::where('selected', UTIL::SELECTED['FEATURED'])
            ->where('status', UTIL::INVENTORY_STATUS['IN_STOCK'])
            ->orderBy('id', UTIL::DESC)->take(4)->get();

        // recent
        $recentCars = Car::latest()
            ->where('status', UTIL::INVENTORY_STATUS['IN_STOCK'])
            ->take(12)->get();
	
	    $recentMotorbikes = Motorbike::latest()
            ->where('status', UTIL::INVENTORY_STATUS['IN_STOCK'])
            ->take(12)->get();

        $recentParts = Part::latest()
            ->where('status', UTIL::INVENTORY_STATUS['IN_STOCK'])
            ->take(12)->get();

        $announcements = Announcement::latest()
            ->take(12)->get();

        return view('front/pages/home', [
            'announcements' => $announcements,
            'mainFeaturedCar' => $mainFeaturedCar,
            'topLeftFeaturedCar' => $topLeftFeaturedCar,
            'topRightFeaturedCar' => $topRightFeaturedCar,
            'bottomLeftFeaturedCar' => $bottomLeftFeaturedCar,
            'bottomRightFeaturedCar' => $bottomRightFeaturedCar,
            'services' => $services,
            'promotions' => $promotions,
            'testimonials' => $testimonials,
            'recents' => $recents,
            'featuredMotorbikes' => $featuredMotorbikes,
            'featuredParts' => $featuredParts,
            'recentCars' => $recentCars,
            'recentMotorbikes' => $recentMotorbikes,
            'recentParts' => $recentParts,
        ]);
    }

    public function cars() {

        $announcements = Announcement::latest()
            ->take(12)->get();

        return view('front/pages/cars', [
            'announcements' => $announcements
        ]);
    }

    public function motorbikes() {

        $recents = Motorbike::recents(8);

        $announcements = Announcement::latest()
            ->take(12)->get();

        return view('front/pages/motorbikes', [
            'announcements' => $announcements,
            'recents' => $recents
        ]);
    }
    
    /**
     * parts menu
     *
     */
    public function parts() {
        
        $recents = Part::recents(8);

        $announcements = Announcement::latest()
            ->take(12)->get();

        return view('front/pages/parts', [
            'announcements' => $announcements,
            'recents' => $recents
        ]);
    }

    public function contact() {

        return view('front/pages/contact');   
    }

    public function login() {

        $announcements = Announcement::latest()
            ->take(12)->get();
            
        return view('front/pages/login', [
            'announcements' => $announcements
        ]);   
    }

    public function locale(Request $request) {

        $session = $request->session();

        $locale = $session->get('locale', 'en');

        Log::debug("previous locale = ${locale}");

        $session->put('locale', $locale == 'en' ? 'kh' : 'en');

        return back();
    }
}
