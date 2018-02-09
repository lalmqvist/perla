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

class AdsController extends Controller
{
    public function index()
    {
        $ads= Ad::all();
        $subCategories = Categories::where('id', '<', 5)->get();;

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
        $phrase = trim($request->search);
        $ads = Ad::where('title', 'like', '%' . $phrase . '%')->get();
        // $phrase = trim($phrase);
        // if (strlen($phrase) <= 1) {
        //     echo 'En';
        //     $keywords = Keyword::where('word', 'like', $phrase. '%')->select('word')->get();
        // } else {
        //     echo 'Flera';
        //     $keywords = Keyword::where('word', 'like', '%' . $phrase . '%')->select('word')->get();
        // }
        // $result = [];
        // foreach ($keywords as $key => $word) {
        //     $result[$key] = $word->word;
        // }
        // var_dump($keywords);
        // $result = array('hej', 'hejsan');
        // return $result;
        // return response('OK!', 200)->json($result);
        // return view('ads.index', compact('ads', 'subCategories'));
        return view('ads.index', compact('ads'));
    
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
        // // dd($request->file());
        // $path = $request->file('thumb')->store('thumb');
        // // $path = Storage::putFile('thumb', $request->file('thumb'));
        // dd($path);
        // // ../storage/app/thumb/CgL0vFDUOq4JAf8i0IDwfXK4ji3YvnX24canMiR7.png
        // // $path = $request->file('avatar')->store('avatars');
        // // Storage::disk('local')->put('file.txt', 'Contents');
    }
    
    public function showCategory()
    {

    }

}
