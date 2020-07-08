<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    //
    public function index(){
        $product = Product::take(3)->get();
        return view('welcome',compact('product'));
    }
}
