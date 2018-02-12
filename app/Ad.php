<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{

    protected $guarded = [];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }


    public function order()
    {
        // return $this->belongsTo('App\Order');
        return $this->belongsToMany('App\Order', 'order_ads', 'ad_id', 'order_id');

    }

    public function ad_categories()
    {
        return $this->hasMany('App\Ads_categories');
    }

    public function charities()
    {
        return $this->belongsToMany('App\Charities', 'ads_charities', 'ad_id', 'charity_id');
    }

    public function adsInWishlist()
    {
        return $this->belongsToMany('App\Users', 'wishlist', 'ad_id', 'user_id');
    }

    public function images()
    {
        return $this->hasMany('App\Img_ad');
    }

    // public function wishlist()
    // {
    //     return $this->hasMany('App\Wishlist');
    // }

    public function charitySum()
    {
        return $this->hasOne('App\Ads_charities');
    }
}
