<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    //this is the shop controller for the shop in the mav bar
    public function index(){
        return view('shop');
    }
}
