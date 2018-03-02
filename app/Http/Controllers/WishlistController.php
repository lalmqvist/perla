<?php

namespace App\Http\Controllers;
use App\Wishlist;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authUser = Auth::user();
        $user = User::find($authUser->id);
        $ads = $user->wishlistads;
        $wishlistItems = $user->wishlist;
        $wishlist = [];

        foreach ($wishlistItems as $key => $item) {
            $wishlist[] = $item->ad_id;
        }

        return view('home.wishlist', compact('ads', 'wishlist'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Wishlist::create([
            'user_id' => $request->user_id,
            'ad_id' => $request->ad_id
        ]);

        $result = [
            'user_id' => $request->user_id,
            'ad_id' => $request->ad_id
        ];
        
        return $result;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Wishlist::where([
            ['user_id', '=', $request->user_id],
            ['ad_id', '=', $request->ad_id]
        ])->delete();

        $result = [
            'user_id' => $request->user_id,
            'ad_id' => $request->ad_id
        ];
        
        return $result;
    }
}
