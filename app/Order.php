<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function ads()
    {
        return $this->belongsToMany('App\Ad', 'order_ads', 'order_id', 'ad_id');

    }
}
