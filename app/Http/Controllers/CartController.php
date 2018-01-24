<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LukePOLO\LaraCart\LaraCartServiceProvider;
use LukePOLO\LaraCart\Facades\LaraCart;
use App\Ad;
use App\User;

class CartController extends Controller
{
    public function __construct() 
    {
        // LaraCart::add();
    }

    public function showCart()
    {
        $cartItems = LaraCart::getItems();
        return view('cart.index', compact('cartItems'));
    }

    public function addToCart(Ad $ad, Request $request)
    {
    
        

        LaraCart::add(
            $itemID = $ad->id,
            $name = $ad->title,
            $qty = 1,
            $price = $ad->price,
            $options = ['thumb' => $ad->thumb, 'gift' =>  ],
            $taxable = false,
            $lineItem = false
        );

        return back()->with('status', 'Produkten är tillagd i din kundvagn!');
    }

    public function removeFromCart($item)
    {
        LaraCart::removeItem($item);
        return back()->with('status', 'Produkten är borttagen från kundvagnen!');
    }

    public function emptyCart() 
    {
        LaraCart::emptyCart();
        return back()->with('status', 'Din kundvagn är nu tom!');
    }

    public function checkOut() 
    {

    }



}
