<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charities;
use App\Field;
use App\Charity_field;
use App\Ad;
use Illuminate\Support\Facades\Auth;
use App\User;

class CharitiesController extends Controller
{
    public function index()
    {
        $fields= Field::all();

        return view('charities.index', compact('fields'));
    }

    public function showField(Field $field)
    {
        $fieldName = $field->name;
        $fieldImg = $field->img;

        $charities = $field->charities;

        return view('charities.show-field', compact('charities', 'fieldName', 'fieldImg'));
    
    }

    public function showAdsInCharity(Charities $charities)
    {
    // Hämtar annonser i en specifik organisation
        $ads = $charities->ads;
        $pageHeading = 'Annonser för '.$charities->name;

        $wishlist = [];

        if (Auth::check()) {
            $user = User::find(Auth::user()->id);
        
            $wishlistItems = $user->wishlist;
            

            foreach ($wishlistItems as $key => $item) {
                $wishlist[] = $item->ad_id;
            }
        }

        return view('ads.index', compact('ads', 'pageHeading', 'wishlist'));
    
    }
    
}
