<?php

namespace App\Http\Controllers\Front\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index () {
        return view('front.services.index');
    }
}
