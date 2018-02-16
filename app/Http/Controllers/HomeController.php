<?php

namespace App\Http\Controllers;

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $user = new UserController;
        $progressOrders = $user->getUserOrderProgress();
        $progressAds = $user->getUserAdsProgress();
        return view('home', compact('progressOrders', 'progressAds'));
    }
}
