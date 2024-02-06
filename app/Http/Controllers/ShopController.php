<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    //this is the shop controller for the shop in the mav bar
    public function index(){
        $products = Product::orderBy('created_at','DESC')->paginate(12);
        return view('shop', ['products'=>$products]);
    }

    public function productDetails($slug){
        $product = Product::where('slug',$slug)->first();
        $rproducts = Product::where('slug','!=', $slug)->inRandomOrder('id')->get()->take(8);
        return view('details',['product'=>$product,'rproducts'=>$rproducts]);
    }
}
 