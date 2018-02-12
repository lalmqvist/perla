<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ad;
use App\User;
use App\Charities;
use App\Categories;
use App\Keyword;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UploadRequest;

class AdsController extends Controller
{
    public function index()
    {
        $allAds= Ad::all();
        $subCategories = Categories::where('id', '<', 5)->get();;

        $ads = [];
        foreach ($allAds as $key => $ad) {
            
            if ($ad->active) {
                $ads[] = $ad;
            }
        }

        return view('ads.index', compact('ads', 'subCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $charities = Charities::all();
        $categories = Categories::all();

        return view('home.newad', compact('user', 'charities', 'categories'));
    }

    public function show(Ad $ad)
    {

        //Hämtar välgörenhetsorganisation
        foreach ($ad->charities as $charity) {
            $charityName = $charity->name;
        }
        //Hämtar summa som valts till välgörenhetsorganisation
        $charitySum = $ad->charitySum->sum;

        // dd($ad->user);

        return view('ads.show', compact('ad', 'charitySum', 'charityName'));
    
    }

    public function searchAutocomplete(Request $request)
    {

        $phrase = trim($request->search);

        if (strlen($phrase) <= 1) {

            $keywords = Keyword::where('word', 'like', $phrase. '%')->select('word')->get();
        } else {

            $keywords = Keyword::where('word', 'like', '%' . $phrase . '%')->select('word')->get();
        }
        $result = [];
        foreach ($keywords as $key => $word) {
            $result[$key] = $word->word;
        }

        return $result;
    
    }

    public function showSearch(Request $request)
    {
        // dd($request->search);
        $phrase = $request->input('search');
        $allAds = Ad::where('title', 'like', '%' . $phrase . '%')
        ->orWhere('brand', 'like', '%' . $phrase . '%')
        ->orWhere('type', 'like', '%' . $phrase . '%')
        ->orWhere('color', 'like', '%' . $phrase . '%')
        ->orWhere('material', 'like', '%' . $phrase . '%')
        ->orWhere('keywords', 'like', '%' . $phrase . '%')
        ->get();

        $ads = [];
        foreach ($allAds as $key => $ad) {
            
            if ($ad->active) {
                $ads[] = $ad;
            }
        }

        return view('ads.search', compact('ads', 'phrase'));
    
    }

    public function showSearchWord($phrase)
    {

        $allAds = Ad::where('title', 'like', '%' . $phrase . '%')
        ->orWhere('brand', 'like', '%' . $phrase . '%')
        ->orWhere('type', 'like', '%' . $phrase . '%')
        ->orWhere('color', 'like', '%' . $phrase . '%')
        ->orWhere('material', 'like', '%' . $phrase . '%')
        ->orWhere('keywords', 'like', '%' . $phrase . '%')
        ->get();
        
        $ads = [];
        foreach ($allAds as $key => $ad) {
            
            if ($ad->active) {
                $ads[] = $ad;
            }
        }

        return view('ads.search', compact('ads', 'phrase'));
    
    }

    public function showUser(User $user)
    {

        $ads = Ad::where('user_id', Auth::user()->id)->get();
        $charityName = [];
        $charitySum = [];
        foreach ($ads as $ad) {
            
            foreach ($ad->charities as $charity) {
                $charityName[$ad->id] = $charity->name;
            }
            $charitySum[$ad->id] = $ad->charitySum->sum;
        }
        // dd();
        return view('home.ads', compact('ads', 'charitySum', 'charityName'));
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validerar fälten
        $this->validate($request, [

            'thumb' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'img2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'img3' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    
        ]);
    
    //Hämtar uppladdade filer
        $thumb = $request->file('thumb');
        $img2 = $request->file('img2');
        $img3 = $request->file('img3');
    
        //Sets the images names
        $input['thumb_name'] = Auth::user()->id . time().'_1.'.$thumb->getClientOriginalExtension();
        $input['img'][1] = Auth::user()->id . time().'_1.'.$thumb->getClientOriginalExtension();
        $input['img'][2] = Auth::user()->id . time().'_2.'.$img2->getClientOriginalExtension();
        $input['img'][3] = Auth::user()->id . time().'_3.'.$img3->getClientOriginalExtension();
    
        $destinationPath = public_path('/img/products');
    
    //Moves files to the path above
        $thumb->move($destinationPath, $input['thumb_name']);
        $img2->move($destinationPath, $input['img'][2]);
        $img3->move($destinationPath, $input['img'][3]);

    //Saves ad to ads table
        Ad::create([
            'user_id' => Auth::user()->id,
            'title' => $request->input('title'),
            'price' => $request->input('price'),
            'brand' => $request->input('brand'),
            'type' => $request->input('type'),
            'size' => $request->input('size'),
            'color' => $request->input('color'),
            'material' => $request->input('material'),
            'condition' => $request->input('condition'),
            'other' => $request->input('other'),
            'thumb' => $input['thumb_name'],
            'active' => true,
        ]);

        //Adds the images to img_ads table with last ad_id
        foreach ($input['img'] as $key => $img) {
            $latestAd = Ad::latest()->first();
            $latestAd->images()->create([
                'ad_id' => $latestAd->id,
                'img' => $img,
            ]);
        }
            
        //Adds chosen categories to ads_categories table
        foreach ($request->input('category') as $key => $value) {
            $latestAd = Ad::latest()->first();
            $latestAd->ad_categories()->create([
                'ad_id' => $latestAd->id,
                'category_id' => $key,
            ]);
        }
        
        //Adds the chosen charity to ads_charities table    
        $latestAd = Ad::latest()->first();
        $latestAd->charitySum()->create([
            'ad_id' => $latestAd->id,
            'charity_id' => $request->input('charity'),
            'sum' => $request->input('charitySum')
        ]);


        return back()->with('status','Din annons är skapad!');
    }

}
