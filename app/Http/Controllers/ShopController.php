<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    //this is the shop controller for the shop in the mav bar
    public function index(){
        $products = Product::orderBy('created_at','DESC')->paginate(12);
        return view('shop',['products'=>$products]);
    }
}
