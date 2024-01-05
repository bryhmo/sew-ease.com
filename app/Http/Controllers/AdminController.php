<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //returning the admin index blade
    public function index()
    {
        return view('admin.index');
    }
}
