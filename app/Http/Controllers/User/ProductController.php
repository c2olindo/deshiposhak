<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\banner;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $product = product::all()->toArray();
        return view('front.shop', compact('product'));
    }

    public function product(product $slug) {
        return view('front.product', compact('slug'));
    }

}

