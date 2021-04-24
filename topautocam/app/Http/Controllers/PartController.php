<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Part;
use Illuminate\Http\Request;

class PartController extends Controller
{
    public function index()
    {
        $announcements = Announcement::latest()
            ->take(12)->get();

        return view('front.pages.parts.index', [
            'announcements' => $announcements
        ]);
    }

    public function detail($id)
    {   
        $part = Part::where('id', $id)->first();
        if($part == null) {
            abort(404);
        }

        return view('front.pages.parts.detail', [
            'part' => $part
        ]);
    }

}
