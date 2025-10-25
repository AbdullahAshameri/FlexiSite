<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function index()
    {
        $footer = Footer::first();
        return view('front.front', compact('footer'));
    }

    public function show()
    {
        // دائماً نفترض وجود سجل واحد فقط في جدول الفوتر
        $footer = Footer::first();

    }
}
