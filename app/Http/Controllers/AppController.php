<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    //return the index page
    public function index(){
        return view('index');
    }

}
