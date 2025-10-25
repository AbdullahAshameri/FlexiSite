<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{   // controller dairect search in views folder
    //Actions

    public function __construct()
    {
        $this->middleware(['auth'])->only('index');
    }


    public function index()
    {
        $title = 'Store';

        $user = Auth::user();
        // dd($user);
        return view('/dashboard.index', [
            'user' => 'Abdullah Alshameri',
        ]);
    }
}
