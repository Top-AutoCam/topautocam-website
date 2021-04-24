<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Car;
use Illuminate\Http\Request;
use OptimistDigital\NovaBlog\Models\Post;

class CarController extends Controller
{
    public function index()
    {
        $announcements = Announcement::latest()
            ->take(12)->get();

        return view('front.pages.cars.index', [
            'announcements' => $announcements
        ]);
    }

    public function detail($id)
    {   
        $car = Car::where('id', $id)->first();
        if($car == null) {
            abort(404);
        }

        return view('front.pages.cars.detail', [
            'car' => $car
        ]);
    }

}
