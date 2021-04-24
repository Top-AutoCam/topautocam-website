<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Motorbike;
use Illuminate\Http\Request;

class MotorbikeController extends Controller
{
    public function index()
    {
        $announcements = Announcement::latest()
            ->take(12)->get();

        return view('front.pages.motorbikes.index', [
            'announcements' => $announcements
        ]);
    }

    public function detail($id)
    {   
        $motorbike = Motorbike::where('id', $id)->first();
        if($motorbike == null) {
            abort(404);
        }

        return view('front.pages.motorbikes.detail', [
            'motorbike' => $motorbike
        ]);
    }

}
