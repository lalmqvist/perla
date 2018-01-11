<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ad;

class AdsController extends Controller
{
    public function index()
    {
        $ads= Ad::all();

        // return $ads;
        return view('ads.index', compact('ads'));
    }

    public function show(Ad $ad)
    {

        return view('ads.show', compact('ad'));
    
    }
}
