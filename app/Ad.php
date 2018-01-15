<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function order()
    {
        return $this->belongsTo('App\Order');
    }

    // public function categories()
    // {
    //     return $this->belongsToMany('App\Categories', 'ads_category', 'ad_id', 'category_id');
    // }

    public function charities()
    {
        return $this->belongsToMany('App\Charities', 'ads_charity', 'ad_id', 'charity_id');
    }

    public function images()
    {
        return $this->hasMany('App\Img_ad');
    }

}
