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

        //Hämtar välgörenhetsorganisation
        foreach ($ad->charities as $charity) {
            $charityName = $charity->name;
        }
        //Hämtar summa som valts till välgörenhetsorganisation
        $charitySum = $ad->charitySum->sum;

        return view('ads.show', compact('ad', 'charitySum', 'charityName'));
    
    }
    
    public function showCategory()
    {

    }

}
