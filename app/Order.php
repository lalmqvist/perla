<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $guarded = [];

    public function ads()
    {
        return $this->belongsToMany('App\Ad', 'order_ads', 'order_id', 'ad_id');

    }

    public function order_ads()
    {
        return $this->hasMany('App\Order_ad');

    }

    public function user()
    {
        return $this->belongsTo('App\User');

    }

    public function seller()
    {
        return $this->hasOne('App\User', 'id', 'seller_id');

    }


}
