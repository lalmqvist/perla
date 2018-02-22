<?php

namespace App\Http\Controllers;

use App\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display the specified Category.
     *
     * @param  \App\Categories  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Categories $categories)
    {
        $category = $categories;
        $subCategories = Categories::where('parent', $categories->parent)->get();
        $allAds = $categories->ads;
        $ads = [];
        foreach ($allAds as $key => $ad) {
            
            if ($ad->active) {
                $ads[] = $ad;
            }
        }

        return view('ads.index', compact('ads', 'category', 'subCategories'));
    }
}
