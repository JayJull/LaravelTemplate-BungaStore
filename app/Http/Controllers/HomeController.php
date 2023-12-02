<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function homeindex()
    {
        return view('dsguest.home');
    }

    public function aboutindex()
    {
        return view('dsguest.about');
    }
}