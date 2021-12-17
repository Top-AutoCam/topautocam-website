<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Car;
use App\Models\CarService;
use App\Models\Motorbike;
use App\Models\Part;
use App\Models\Promotion;
use App\Models\Testimonial;
use App\Models\About;
use App\Models\Video;
use App\Models\Gallery;
use App\Models\FQA;
use App\Models\Team;
use App\Util\UTIL;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use DB;

class SiteController extends Controller
{

    public function index()
    {
        $featuredCars = Car::featureds(5);
        $mainFeaturedCar = $featuredCars[0];
        $topLeftFeaturedCar = $featuredCars[1];
        $topRightFeaturedCar = $featuredCars[2];
        $bottomLeftFeaturedCar = $featuredCars[3];
        $bottomRightFeaturedCar = $featuredCars[4];

        $services = CarService::list(6);
        $promotions = Promotion::latest()->take(2)->get();
        $testimonials = Testimonial::latest()->take(3)->get();
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

        $announcements = Announcement::latest()->take(12)->get();

        $mostCarView = Car::OrderBy('view_count', 'DESC')->take(5)->get();
        $mainMostCarView = $mostCarView[0];
        $leftTopMostCarView = $mostCarView[1];
        $leftButtomMostCarView = $mostCarView[2];
        $rightTopMostCarView = $mostCarView[3];
        $rightBottomMostCarView = $mostCarView[4];
      

        return view('front.pages.home', [
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
            'mainMostCarView'=> $mainMostCarView,
            'leftTopMostCarView' => $leftTopMostCarView,
            'leftButtomMostCarView' => $leftButtomMostCarView,
            'rightTopMostCarView' => $rightTopMostCarView,
            'rightBottomMostCarView' => $rightBottomMostCarView,
        ]);
    }

    public function contact()
    {
        return view('front.pages.contact');
    }

    public function aboutUs()
    {
        $aboutus = About::latest()->get();
        $teams = Team::latest()->get();
        $videos = Video::latest()->take(2)->get();
        $galleries = Gallery::latest()->get();
        $services = CarService::latest()->get();

        return view('front.pages.about-us',[
            'aboutus' => $aboutus,
            'teams' => $teams,
            'videos' => $videos,
            'galleries' => $galleries,
            'services' => $services,
        ]);
    }

    public function FQAs(){
        $fqas = FQA::latest()->get();
        return view('front.pages.fqas',[
            'fqas' => $fqas,
        ]);
    }

    public function login()
    {
        $announcements = Announcement::latest()
            ->take(12)->get();

        return view('front.pages.login', [
            'announcements' => $announcements
        ]);
    }

    public function locale(Request $request)
    {
        $session = $request->session();
        $locale = $session->get('locale', 'en');

        Log::debug("previous locale = ${locale}");

        $session->put('locale', $locale == 'en' ? 'kh' : 'en');

        return back();
    }


    public function service(){
        return view('front.pages.service');
    }

    public function catalog(){
        return view('front.pages.catalog.index');
    }

    public function carcompare(){
        return view('front.pages.car_compare.index');
    }

    public function wheelchange(){
        return view('front.pages.steering_wheel_change.index');
    }
}
