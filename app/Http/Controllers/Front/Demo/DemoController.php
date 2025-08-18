<?php

namespace App\Http\Controllers\Front\Demo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index () {
        return view('front.demo.about');
    }

    public function contactMethod () {
        return view('front.demo.contact');
    }
}
