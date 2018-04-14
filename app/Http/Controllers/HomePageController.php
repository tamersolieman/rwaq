<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class HomePageController extends Controller
{
    /**
    * Display all products
    */
    public function index(){
        $products = Product::select('id','title','price')
                            ->latest()
                            ->paginate(9);
        return view('front.index',compact('products'));
    }

    /**
    * Display the products by category
    */
    public function adsByCategory($id){
        $products = Product::where('category_id',$id)->get();
        return view('front.byCategory',compact('products'));
    }

    /**
    * Display product details page 
    */
    public function adsDetails($id){
        $product = Product::find($id);
        return view('front.details',compact('product'));
    }


}
