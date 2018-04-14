<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class HomePageController extends Controller
{
    public function index()
    {
        $products = Product::select('id','title','price')
                            ->latest()
                            ->paginate(9);
        return view('front.index',compact('products'));
    }
}
