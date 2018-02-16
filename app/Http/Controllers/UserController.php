<?php

namespace App\Http\Controllers;
use App\User;
use App\Order;
use App\Ad;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function getUserOrderProgress()
    {
        
        $user = Auth::user();
        $orders = Order::where('user_id', $user->id)->get();
        
        $orderSum = 0.0;
        $giftSum = 0.0;

        foreach ($orders as $order) {
            $ads = $order->order_ads;
            foreach ($ads as $ad) {
                $orderSum = $orderSum + $ad->price;
                $giftSum = $giftSum + $ad->gift;
            }
        }

        $totalOrder = [];

        $number = $giftSum / $orderSum;
        $percentOrders = number_format($number, 2, '.', ',');
        
        $totalOrder['orderSum'] = $orderSum;
        $totalOrder['giftSum'] = $giftSum;
        $totalOrder['percent'] = $percentOrders;

        return $totalOrder;
    }

    public function getUserAdsProgress()
    {
        
        $authUser = Auth::user();
        $ads = Ad::where([
            ['user_id', '=', $authUser->id],
            ['active', '=', 0]
        ])->get();


        $adsSum = 0.0;
        $giftSum = 0.0;

        foreach ($ads as $key => $ad) {
            // echo 'Procent för '. $ad->id.' är '.$ad->charitySum->sum;
            // echo '<br>';

            $percent = $ad->charitySum->sum * 0.01;
            $price = $ad->price;

            $charitySum = $price * $percent;
            // echo 'Price för '. $ad->id.' är '.$price;
            // echo '<br>';
            // echo 'Varav välgörenhet '. $ad->id.' är '.$charitySum;
            // echo '<br>';
            
            $adsSum = $adsSum + $price;
            $giftSum = $giftSum + $charitySum;
            // echo 'Totalt sålt efter '. $ad->id.' är '.$adsSum;
            // echo '<br>';
            // echo 'Total gåva efter '. $ad->id.' är '.$giftSum;
            // echo '<br><br>';
            
        }
        $totalAds = [];
        $number = $giftSum / $adsSum;
        $percentAds = number_format($number, 2, '.', ',');

        $totalAds['adsSum'] = $adsSum;
        $totalAds['giftSum'] = $giftSum;
        $totalAds['percent'] = $percentAds;

        // echo 'Total procent är '. $percentAds;
        // echo '<br><br><br>';
        // dd($ads);
        
        return $totalAds;
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $user = Auth::user();
        return view('home.contacts', compact('user'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = Auth::user();
        //Validera!!
        User::where('id', $user->id)->update([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'phone' => $request->phone,
            'email' => $request->email,
            'street1' => $request->street1,
            'street2' => $request->street2,
            'zip' => $request->zip,
            'city' => $request->city
        ]);

        return back()->with('status', 'Dina uppgifter har sparats!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
