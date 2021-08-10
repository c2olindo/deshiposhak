<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\banner;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $banner = banner::all()->toArray();

        return view('front.home',compact('banner'));
    }

    public function about() {
        return view('front.about');
    }

    public function contact() {
        return view('front.contact');
    }
}
