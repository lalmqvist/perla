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

        // $images=$ad->images;
        // foreach ($images as $key => $img) {
        //     echo $img->img;
        // }

        // dd($ad->images[0]->img);
        // var_dump($ad);
        // dd($ad = Ad::find($ad));
        return view('ads.show', compact('ad'));
    
    }
    
    public function showCategory()
    {

    }

}
