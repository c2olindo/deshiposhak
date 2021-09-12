<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\banner;
use App\Models\product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $banner = banner::all()->toArray();
        $product = product::latest()->take(6)->get();

        return view('front.home', compact('banner', 'product'));
    }

    public function about() {
        return view('front.about');
    }
}
