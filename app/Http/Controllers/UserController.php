<?php

namespace App\Http\Controllers;
use App\User;
use App\Order;
use App\Ad;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function getUserOrderProgress()
    {
        //Hämtar total ordersumma och total gåvosumma för usern
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
        //Hämtar total annonssumma och total gåvosumma för usern
        $authUser = Auth::user();
        $ads = Ad::where([
            ['user_id', '=', $authUser->id],
            ['active', '=', 0]
        ])->get();


        $adsSum = 0.0;
        $giftSum = 0.0;

        foreach ($ads as $key => $ad) {

            $percent = $ad->charitySum->sum * 0.01;
            $price = $ad->price;

            $charitySum = $price * $percent;
           
            $adsSum = $adsSum + $price;
            $giftSum = $giftSum + $charitySum;
        }
        
        $totalAds = [];
        $number = $giftSum / $adsSum;
        $percentAds = number_format($number, 2, '.', ',');

        $totalAds['adsSum'] = $adsSum;
        $totalAds['giftSum'] = $giftSum;
        $totalAds['percent'] = $percentAds;
        
        return $totalAds;
    }

    /**
     * Show the form for editing the specified user.
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
     * Update the specified user in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string|max:255',
            'street1' => 'required|string|max:255',
            'street2' => 'string|max:255',
            'zip' => 'required|string|max:255',
            'city' => 'required|string|max:255',
        ]);
        
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
