<?php

namespace App\Http\Controllers;

use App\Order;
use App\Ad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use LukePOLO\LaraCart\LaraCartServiceProvider;
use LukePOLO\LaraCart\Facades\LaraCart;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $orders = Order::where('user_id', $user->id)->get();

        $orderSum = [];
        $giftSum = [];
        
        foreach ($orders as $order) {
            $orderSum[$order->id] = 0;
            $giftSum[$order->id] = 0;
            $ads = $order->order_ads;
            
            foreach ($ads as $ad) {
                $orderSum[$order->id] = $orderSum[$order->id] + $ad->price;
                $giftSum[$order->id] = $giftSum[$order->id] + $ad->gift;

            }
        }
        return view('home.orders', compact('orders', 'orderSum', 'giftSum'));
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

        Order::create([
            'user_id' => Auth::user()->id,
            'fname' => $request->input('fname'),
            'lname' => $request->input('lname'),
            'payment' => $request->input('payment'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'street1' => $request->input('street1'),
            'street2' => $request->input('street2'),
            'zip' => $request->input('zip'),
            'city' => $request->input('city'),
            
        ]);
        $order = Order::latest()->first();

        foreach ($cartItems = LaraCart::getItems() as $item) {

            $order->order_ads()->create([
                'order_id' => $order->id,
                'ad_id' => $item->id,
                'price' => $item->price,
                'gift' => $item->sum,
            ]);

            Ad::where('id', $item->id)
            ->update(['active' => false]);

            }

            LaraCart::emptyCart();
            return redirect()->route('home')->with('status', 'Tack för din order!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
